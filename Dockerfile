FROM php:8-apache

COPY ./index.php /var/www/html/index.php

COPY ./conf/ports.conf /etc/apache2/ports.conf                                
COPY ./conf/000-default.conf /etc/apache2/sites-available/000-default.conf 
