FROM debian:buster

RUN apt-get -y update && apt-get install -y nginx

COPY conf /etc/nginx/http.d/default.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]