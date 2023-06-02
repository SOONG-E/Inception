FROM debian:buster

RUN apt-get -y update && apt-get install -y nginx openssl
RUN mkdir /etc/nginx/certificate
RUN openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out nginx-certificate.crt -keyout nginx.key -subj "/C=KR/ST=Seoul/L=Seoul/O=42seoul/CN=yujelee.42.fr" && \
	chmod 700 nginx-certificate.crt && chmod 700 nginx.key && mv nginx-certificate.crt /etc/nginx/certificate/ && mv nginx.key /etc/nginx/certificate/

COPY conf /etc/nginx/conf.d/default.conf
# COPY conf /etc/nginx/nginx.conf

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]