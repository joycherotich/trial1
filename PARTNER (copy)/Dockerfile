# Use the official PHP image with Apache as the web server
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the composer.json and composer.lock files to install dependencies
COPY composer.json composer.lock /var/www/html/

# Install dependencies
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libzip-dev zip unzip && \
    docker-php-ext-configure zip && \
    docker-php-ext-install zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

    # Install the MySQL PDO driver
RUN docker-php-ext-install pdo_mysql

# Copy the entire application
COPY . /var/www/html/

# Install application dependencies
RUN composer install --optimize-autoloader --no-dev

# Set up Apache for Laravel
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
# Start Apache in the background
CMD ["apache2-foreground", "-D", "FOREGROUND"]

# Specify the entry point script

#!/bin/bash


# set -e

# # Additional actions before starting the application (e.g., migrations)
# php artisan migrate --force

# # Start the Apache web server
# exec "$@"


