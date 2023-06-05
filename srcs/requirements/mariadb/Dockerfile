FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y mariadb-server vim procps

COPY ./conf/setup.sql /setup.sql
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN service mysql start && mariadb < /setup.sql

CMD ["mysqld"]
