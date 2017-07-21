#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the docker is provisioned.

cd /var/www
composer install 
composer update 
php artisan migrate
php artisan db:seed
npm install -g
gulp --development
