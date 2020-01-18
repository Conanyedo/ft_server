FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y &&\
	apt-get install -y nginx default-mysql-server openssl procps

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=MA/ST=Khouribga/L=Meknes/O=yb Company/CN=yboudou.com"

COPY srcs/default /etc/nginx/sites-available/
COPY srcs/start_services.sh /home

#CMD sh /home/start_services.sh
