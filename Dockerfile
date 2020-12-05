FROM debian:buster
MAINTAINER Alexandre Krissane <akrissan@student.42.fr>
# COPY src/wordpress.sql ./root/
COPY srcs/default ./root/
# COPY src/wordpress.tar.gz ./root/
COPY srcs/config.inc.php ./root/
COPY srcs/phpinfo.php ./root/
COPY srcs/wp-config.php ./root/
COPY srcs/start.sh ./
CMD bash start.sh && tail -f /dev/null


