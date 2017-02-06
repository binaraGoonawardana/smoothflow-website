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