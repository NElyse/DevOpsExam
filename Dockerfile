# Use the official PHP image with Apache
FROM php:8.1-apache

# Install any required PHP extensions (e.g., mysqli, pdo, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the local application files to the container
COPY . .

# Expose port 80 (Apache default)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
