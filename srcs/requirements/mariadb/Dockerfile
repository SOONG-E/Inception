FROM debian:buster

WORKDIR .

RUN apt-get -y update && \
	apt-get install -y mariadb-server php-mysql 

COPY init.sh init.sh

RUN echo "qw"

RUN chmod 777 init.sh && ./init.sh

CMD ["mysqld"]
