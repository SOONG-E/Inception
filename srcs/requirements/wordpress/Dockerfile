FROM debian:buster

WORKDIR requirments/wordpress

RUN apt-get -y update && apt-get install -y wget mariadb-client \
	php7.3-fpm php7.3-gd php7.3-json \
	php7.3-mysql php7.3-curl	\
	php7.3-mbstring php7.3-intl	\
	php-imagick php7.3-xml		\
	php7.3-zip

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY conf/entrypoint.sh entrypoint.sh

RUN chmod +x entrypoint.sh

ENTRYPOINT ["sh","./entrypoint.sh"]

CMD php-fpm7.3 --nodaemonize