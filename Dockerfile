FROM php:8.0.5-fpm-alpine

WORKDIR /var/www

RUN  apk update && apk add \
     build-base \
     nano  

RUN  docker-php-ext-install   pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


RUN  addgroup  -g  1000 -S  www  && \
     adduser  -u  1000 -S www  -G www

USER  www

COPY  --chown=www:www  . /var/www

RUN echo "sendmail_path = /usr/sbin/sendmail -t -i" >> /usr/local/etc/php/php.ini
RUN echo "SMTP = mymailserver.com" >> /usr/local/etc/php/php.ini
RUN echo "smtp_port = 25" >> /usr/local/etc/php/php.ini

EXPOSE 9000