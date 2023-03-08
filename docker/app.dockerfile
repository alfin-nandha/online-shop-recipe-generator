FROM php:8.1-fpm-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk add --update npm
RUN npm install npm@8.19 -g && \
    npm install n -g

WORKDIR /app
COPY . .

EXPOSE 8000
RUN composer install