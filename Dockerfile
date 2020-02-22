FROM php:7.4-fpm-alpine

WORKDIR /var/www/

RUN docker-php-ext-install pdo_mysql

COPY ./ /var/www/

EXPOSE 9000

CMD ["php-fpm"]