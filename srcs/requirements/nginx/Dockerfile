FROM debian:buster

RUN apt-get -y update && apt-get install -y nginx openssl
RUN mkdir /etc/nginx/certificate && cd /etc/nginx/certificate && openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out nginx-certificate.crt -keyout nginx.key -subj "/C=KO/ST=Seoul/L=Seoul/O=Gaepo/CN=yujelee.42.fr"

COPY conf /etc/nginx/http.d/default.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]