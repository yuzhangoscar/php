# Use a base PHP image with FPM support
FROM php:fpm

RUN docker-php-ext-install mysqli
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configure Xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www/html

COPY php.ini /usr/local/etc/php/php.ini

# Expose the PHP-FPM port
EXPOSE 9000

# Start PHP-FPM service
CMD ["php-fpm"]
