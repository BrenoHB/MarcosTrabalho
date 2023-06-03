FROM php:8.1-fpm-bullseye

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y libzip-dev zip unzip
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 9000