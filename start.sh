#!/bin/sh

ls -la
pwd

chmod -R 777 storage/logs/;
php artisan config:cache;


set -e

cron

exec apache2-foreground
