FROM debian:buster

RUN apt-get -y update && apt-get install -y nginx-full

COPY conf /etc/nginx/nginx.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]