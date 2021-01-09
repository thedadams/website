FROM php:7.2-apache

LABEL maintainer="donnie@thedadams.com"

ENV VIRTUAL_HOST=thedadams.com,www.thedadams.com LETSENCRYPT_HOST=thedadams.com,www.thedadams.com LETSENCRYPT_EMAIL=donnie@thedadams.com

COPY . /var/www/html

EXPOSE 80

