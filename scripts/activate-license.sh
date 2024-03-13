echo "Activating license for help Check Telegram: @atxBLP"

if [ $# -eq 0 ]
  then
    read -p "Enter License key: " license
else
  license=$1
fi

cd atx

./atx.app activate $license
