# Base image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html/

# Copy the application code to the container
COPY . /var/www/html/

# Install any necessary dependencies
RUN apt-get update && \
    apt-get install -y \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
