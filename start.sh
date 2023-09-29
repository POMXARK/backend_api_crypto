#!/bin/sh


php composer_2.phar update;
php composer_2.phar dump-autoload;

chmod -R 777 storage/logs/;
php artisan config:cache;


set -e

cron

exec apache2-foreground
