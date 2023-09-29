#!/bin/sh

chmod -R 777 storage/logs/;
php artisan config:cache;

service postgresql restart
#psql -c "ALTER USER postgres WITH PASSWORD '12345678';"
#psql -c "create database backend_api_crypto;"

set -e

cron

exec apache2-foreground
