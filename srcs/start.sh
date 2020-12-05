#UPDATE & INSTALL PACKAGES
apt-get -y update 
apt-get -y upgrade 
apt-get -y install nginx

apt-get -y install openssl vim 
openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=FR/ST=Paris/L=Paris/O=42Paris/OU=akrissan/CN=localhost" -keyout localhost.dev.key -out localhost.dev.crt 
mv localhost.dev.crt etc/ssl/certs/ 
mv localhost.dev.key etc/ssl/private/ 
chmod 600 etc/ssl/certs/localhost.dev.crt etc/ssl/private/localhost.dev.key 

cp /root/default etc/nginx/sites-available/default

apt-get -y install php-fpm 
mv /root/phpinfo.php var/www/html/phpinfo.php

apt-get -y install mariadb-server php-mysql 
apt-get install -y wget 
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz 
tar -xvf phpMyAdmin-5.0.2-all-languages.tar.gz 
mv phpMyAdmin-5.0.2-all-languages phpmyadmin 
mv phpmyadmin /var/www/html/ 
cp /root/config.inc.php var/www/html/phpmyadmin/config.inc.php 
# RUN cp -rp var/www/html/phpmyadmin/config.sample.inc.php var/www/html/phpmyadmin/config.inc.php 

# service nginx reload 
service mysql start 
echo "CREATE DATABASE wordpress;" | mysql -u root

#echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
#echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'user'@'%';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
echo "update mysql.user set plugin = '' where user='root';" | mysql -u root

#mysql wordpress -u root --password=  < wordpress.sql



wget https://wordpress.org/latest.tar.gz
tar -xvf latest.tar.gz
mv wordpress/ var/www/html/
cp /root/wp-config.php var/www/html/wordpress/wp-config.php
# chown -R www-data:www-data /var/www/html/wordpress
apt-get install -y php-mbstring php-curl

# cp var/www/html/wordpress/wp-config-sample.php var/www/html/wordpress/wp-config.php 

chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*
# service php7.3-fpm start
service mysql restart
/etc/init.d/php7.3-fpm start
service nginx restart