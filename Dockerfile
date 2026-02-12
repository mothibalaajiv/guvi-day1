# Use official PHP with Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy project files to Apache directory
COPY . /var/www/html/

# Expose Apache port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
