# Use an official PHP image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . /var/www/html/

# Expose the port the app runs on
EXPOSE 80

# Ensure Apache is running
CMD ["apache2-foreground"]
