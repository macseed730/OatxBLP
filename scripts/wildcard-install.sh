#!/bin/bash

killall certbot > /dev/null 2>&1
# TODO: remove
# Check if jq is installed
if ! command -v jq &> /dev/null; then
  echo "jq is not installed. Installing..."
  
  # Installing jq for Ubuntu
  sudo apt-get update
  sudo apt-get install -y jq

  # Verify installation
  if ! command -v jq &> /dev/null; then
    echo "jq installation failed. Exiting..."
    exit 1
  fi
fi


json_data=$(cat atx/config/ssl.json)
# filter the array to get only 'domain' where isWildcard is false or does not exist
filtered_domains=$(echo "$json_data" | jq -r '.[] | select((.isRedirect == false or .isRedirect == null) and (.isWildcard == false or .isWildcard == null)) | .domain')

echo "SELECT A (NON WILDCARD) DOMAIN, TO USE FOR WILDCARD"
echo ""

echo "$filtered_domains" | nl

echo ""
read -p "Select a number: " num

# validate the selection
selected_domain=$(echo "$filtered_domains" | sed -n ${num}p)

if [[ -z "$selected_domain" ]]; then
  echo "Invalid selection."
  exit 1
else
  echo "You selected: $selected_domain"
fi


# --preferred-challenges=dns
certbot certonly --manual --agree-tos --register-unsafely-without-email --manual-public-ip-logging-ok --force-renewal --expand --manual-auth-hook scripts/wcd/auth-hook.sh --manual-cleanup-hook scripts/wcd/finish-hook.sh -d "$selected_domain" -d "*.$selected_domain"

if [ $? -ne 0 ]
then
  echo "WILDCARD FAILED FOR DOMAIN: $selected_domain"
  exit 1
fi

fullchain_cert="/etc/letsencrypt/live/$selected_domain/fullchain.pem"

# add isWildcard: true for the selected domain
updated_json=$(echo "$json_data" | jq --arg domain "$selected_domain" --arg cert "$fullchain_cert" '
  map(if .domain == $domain then .cert = $cert | .isWildcard = true else . end)')

pretty_json=$(echo "$updated_json" | jq '.')


echo -n "$pretty_json" > atx/config/ssl.json

npm run restart

echo -e "\n\nWILDCARD SUCCESSFULLY INSTALLED AND VERIFIED FOR $selected_domain!!!\n"