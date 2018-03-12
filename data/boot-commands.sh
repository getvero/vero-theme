# apt-get --assume-yes install vim
apt-get --assume-yes install mysql-client
mysql --host mysql -u root -proot db < /var/www/html/wp-content/themes/mytheme/data/wp_veropublic.sql
mv /var/www/html/wp-content/themes/mytheme /var/www/html/wp-content/themes/vero
mv /var/www/html/wp-content/themes/vero/data/genesis /var/www/html/wp-content/themes
wp theme update --all --allow-root
wp option update siteurl $SANDBOX_BASE_URL --allow-root
wp option update home $SANDBOX_BASE_URL --allow-root
mysql --host mysql -u root -proot db -e "update wp_posts set post_content = replace(post_content,'/wp-content/themes/vero/','/wp-content/themes/mytheme/')";