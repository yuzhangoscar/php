# Use a base PHP image with FPM support
FROM php:fpm

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY php.ini /usr/local/etc/php/php.ini

# Expose the PHP-FPM port
EXPOSE 9000

# Start PHP-FPM service
CMD ["php-fpm"]
