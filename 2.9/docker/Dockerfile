# Use official PHP FPM image
FROM php:8.2-fpm

# Install minimal dependencies and Composer
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
