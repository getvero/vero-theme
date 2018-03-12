apt-get install mysql-client
mv /var/www/html/wp-content/themes/mytheme /var/www/html/wp-content/themes/vero
mv /var/www/html/wp-content/themes/vero/data/genesis /var/www/html/wp-content/themes
wp theme update --all