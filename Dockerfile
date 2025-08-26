# Use official PHP image with Apache
FROM php:8.2-apache

# Copy project files
COPY . /var/www/html/

# Expose the web server port
EXPOSE 80
