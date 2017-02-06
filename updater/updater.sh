#!/bin/bash

echo ""
echo "BEGIN REPO PULL smoothflow-website"
#cd ../

if [ ! -d "smoothflow-website" ]; then
#	sudo rm -r smoothflow-website
	sudo git clone https://github.com/DuoSoftware/smoothflow-website.git
else
	sudo rm -r smoothflow-website
        sudo git clone https://github.com/DuoSoftware/smoothflow-website.git
#	cd smoothflow-website
#	sudo git pull
#    	cd ..
fi

sudo cp -r  smoothflow-website/* /var/www/html/

echo "Setting apache settings"
sudo chgrp -R www-data /var/www/html/
sudo chown -R www-data /var/www/html/
sudo chmod -R 0777 /var/www/html/


echo "Completed the smoothflow-website repo pul"
