#!/usr/bin/env bash

mkdir -p temp
echo "Updating Apt"
apt-get update
echo "Installing Apt files"
apt-get install mongodb -y

if [ $? -ne 0 ]
then
	echo -e "MongoDB could not be installed in auto mode, Install manually!......\n"
    echo -e "\tExiting!!!!!!!!!\n\n"
    echo -e "\tHALT"
	exit 1
fi


apt install vim certbot php-cgi curl netcat unzip jq -y

echo "Install node v14"

curl -L https://raw.githubusercontent.com/tj/n/master/bin/n -o temp/n
bash temp/n 12

echo "Starting DB service"

service mongodb start

echo "Installing Npm packages for main"
npm install

echo "Setting Up Daemon App Daemonize"
npm i -g pm2 forever



echo "Setting Up Enviromental Files"

echo "Checking Hostname IP....."
hostIp=`hostname -I|xargs`
echo "Host ip is $hostIp"


echo "Generating Secret....."
newSecret=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1)

siteAuth=$(for i in {1..6}; do echo -n "/$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 8 | head -n 1)"; done)

echo "Generating Defaults......."
export MANAGER_USERNAME="atx"
pm3Port=5111
hostPort=3000

echo "Finished Generating Defaults......"


echo "Settig up packages for atx"
cd atx
bash setup-atx.sh


echo "Finished installing atx packages"
cd -

cat > ".env" <<- EOM
HOST_IP=$hostIp

#MONGODB_URI=$MONGODB_URI

HOST_PORT=$hostPort

SITE_AUTH=$siteAuth

PM3_PORT=$pm3Port

EOM

authKey=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 64 | head -n 1)

echo -n $authKey > .auth

echo "ALL IS OK."
