FROM php:7.4-apache

RUN apt-get update
RUN docker-php-ext-install mysqli
