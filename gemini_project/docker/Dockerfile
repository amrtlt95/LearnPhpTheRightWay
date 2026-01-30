FROM php:8.2-fpm

COPY --from=composer/composer:latest /usr/bin/composer /usr/bin/composer

# Install pdo and pdo_mysql extensions
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/