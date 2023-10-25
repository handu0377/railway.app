# Start with the official PHP image
FROM php:fpm

# Install the necessary PHP extensions for MongoDB and Redis
RUN pecl install mongodb redis \
    && docker-php-ext-enable mongodb redis
