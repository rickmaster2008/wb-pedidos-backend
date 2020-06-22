FROM php:7.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

RUN apk add --update --no-cache autoconf g++ imagemagick-dev  imagemagick libtool make pcre-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make pcre-dev

RUN chown -R www-data:www-data /var/www
