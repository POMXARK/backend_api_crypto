#!/bin/sh

service postgresql restart
sudo -u postgres psql -c "ALTER USER postgres WITH PASSWORD '12345678';"
sudo -u postgres psql -c "create database backend_api_crypto;"

php composer_2.phar update
php composer_2.phar dump-autoload

chmod -R 777 storage/logs/
php artisan config:cache
php artisan migrate

sudo -u postgres psql -d backend_api_crypto -c "\copy bittrex__e_t_h_u_s_d_ds FROM 'db/BTC-2017min.csv' DELIMITER ',' CSV HEADER;"

set -e

cron

exec apache2-foreground
