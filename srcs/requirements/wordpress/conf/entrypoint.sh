#!/bin/sh

sleep 3

apt-get -y update && apt-get install curl
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

chown -R www-data:www-data /var/www/*
chown -R 755 /var/www/*

mkdir -p /run/php/
touch /run/php/php7.3-fpm.sock

wp core download --path=${WP_PATH} --allow-root

wp config create --dbname=${DB_NAME} --dbuser=${DB_USER_NAME} --dbpass=${DB_USER_PASSWD} --dbhost=${DB_HOST} --path=${WP_PATH} --allow-root --skip-check

wp core install --url=${WP_URL} --title=${WP_TITLE} --admin_user=${ADMIN_NAME} --admin_password=${ADMIN_PASSWD} --admin_email=${ADMIN_EMAIL} --allow-root --path=${WP_PATH}

wp user create ${USER_NAME} ${USER_EMAIL} --user_pass=${USER_PASSWD} --allow-root --path=${WP_PATH}

exec "$@"
