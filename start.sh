#!/bin/sh

rm /var/www/html/aspire/config.php

chmod -R 0777 /var/www/html/aspire
chmod -R 0777 /var/www/html

/usr/bin/supervisord -n -c /etc/supervisor/supervisord.conf

