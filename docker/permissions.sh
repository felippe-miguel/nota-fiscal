#!/bin/bash

echo "==> Setup permissions for container"
chown -Rf www-data:www-data /var/www/html/storage
chmod -Rf 755 /var/www/html/storage