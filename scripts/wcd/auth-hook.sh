if [ -t 0 ]; then
    echo "Setting Up SSL Instructions..." > /dev/tty
else
    echo "Terminal is not available for reading/writing."
fi

exec 3>&1 4<&0 </dev/tty >/dev/tty 2>&1


CREATE_DOMAIN="_acme-challenge.$CERTBOT_DOMAIN"

dns_msg="
GOTO YOUR DOMAIN PROVIDER DNS RECORD

ADD THE FOLLOWING TXT RECORD TO YOUR DOMAIN

TYPE: TXT
HOSTNAME: _acme-challenge
CONTENT: $CERTBOT_VALIDATION
TTL: 7200

ALSO ADD THE FOLLOWING DNS *A* RECORD
TYPE: A
NAME: *
IP: YOUR VPS IP

AFTER YOU DO THAT COME BACK HERE AND CLICK COFIRM
..............
"

echo "$dns_msg";

confirm_dns_done() {
  sleep 2

  while true; do
    read -p "Done the process? (yes/no): " yn
    case $yn in
      [Yy]* ) 
        read -p "Are you sure? (Because MULTIPLE FAILED RETRIES, IT will BAN your IP  for 1HR)(yes/no): " yn2
        case $yn2 in
          [Nn]* ) confirm_dns_done;;
          [Yy]* ) echo "Proceeding......"; break;;
          * ) echo "Please answer yes or no.";;
        esac
        ;;
      [Nn]* )
        read -p "Do you need more time? (yes/no): " yn3
        case $yn3 in
          [Yy]* ) confirm_dns_done;;
          [Nn]* ) echo "Exiting..."; exit;;
          * ) echo "Please answer yes or no.";;
        esac
        ;;
      * ) echo "Please answer yes or no.";;
    esac
  done
}

confirm_dns_done
