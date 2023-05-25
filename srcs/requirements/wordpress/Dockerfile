FROM debian:buster

RUN apt-get -y update && apt-get install -y wget mariadb-client

RUN	wget -O /tmp/wordpress.tar.gz "http://wordpress.org/latest.tar.gz"

RUN mkdir -p /var/www/html
RUN	tar -xvzf /tmp/wordpress.tar.gz -C /var/www/html

COPY conf /var/www/html/wordpress/wp-config.php

ENTRYPOINT ["/bin/bash"]
