FROM php:7.4-fpm-alpine

WORKDIR /var/www/

RUN docker-php-ext-install pdo_mysql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./ /var/www/

EXPOSE 9000

CMD ["php-fpm"]