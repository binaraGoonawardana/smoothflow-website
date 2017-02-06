#!/bin/bash

echo ""
echo "BEGIN REPO PULL smoothflow-website"
cd ../

if [ ! -d "smoothflow-website" ]; then
	git clone https://github.com/DuoSoftware/smoothflow-website.git
else
	cd smoothflow-website
	git pull
    cd ../
fi

yes | cp -R smoothflow-website/* /var/www/html/

echo "Setting apache settings"
chgrp -R www-data /var/www/html/
chown -R www-data /var/www/html/
chmod -R 0777 /var/www/html/

echo ""
echo "Completed the smoothflow-website repo pul"