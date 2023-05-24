FROM debian:buster

RUN apt-get -y update && apt-get install -y nginx-full

COPY conf /etc/nginx/nginx.conf
# RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf

COPY entrypoint.sh run.sh

RUN echo "qw"

RUN chmod 777 run.sh

ENTRYPOINT ["/bin/bash"]