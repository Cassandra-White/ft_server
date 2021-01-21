FROM    debian:buster

LABEL   maintainer="akrissan@student.42.fr"

RUN    	apt-get update && apt-get install -y \
    	nginx \
    	mariadb-server \
    	php-fpm \
    	php-mysql \
    	php-cli \
    	php-mbstring \
    	openssl \
    	vim

COPY    srcs/nginx.conf /etc/nginx/sites-available/localhost
COPY    srcs/config.inc.php /var
COPY    srcs/wp-config.php /var
COPY    srcs/phpMyAdmin-5.0.4-all-languages.tar.gz ./
COPY    srcs/wordpress-5.6-fr_FR.tar.gz ./
COPY    srcs/init.sh ./


EXPOSE  80 443

CMD    	bash init.sh