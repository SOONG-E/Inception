#!/bin/sh

service mysql start

mysql -uroot -e "create database $DB_NAME"
mysql -uroot -e "show databases"

mysql -uroot -e "create user '$ADMIN_NAME'@'%' identified by '$ADMIN_PASSWD'"
mysql -uroot -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$ADMIN_NAME'@'%'"

USER = user
PW = pw

mysql -uroot -e "create user '$USER'@'%' identified by '$PW'"

mysql -uroot -e "FLUSH PRIVILEGES"
