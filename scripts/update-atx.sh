echo "Rebooting/Updating atx instance"

sleep 3

echo "Stopping Services that may conflict"
service apache2 stop

service nginx stop

npm run stop


echo "Updating atx to the latest"

git pull origin master

if [ $? -ne 0 ]
then
    git stash
    git pull origin master

fi


echo "Starting atx"
npm run start


echo "Update/Reboot Done successfully..."






