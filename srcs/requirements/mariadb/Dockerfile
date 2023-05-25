FROM debian:buster

WORKDIR .

RUN apt-get -y update && \
	apt-get install -y mariadb-server php-mysql 

ENV DB_NAME=db
ENV ADMIN_NAME=admin
ENV ADMIN_PASSWD=admin

COPY init.sh init.sh

RUN echo "qw"

RUN chmod 777 init.sh && ./init.sh

CMD ["mysqld"]
