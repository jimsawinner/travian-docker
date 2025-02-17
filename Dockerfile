# Use official PHP-Apache image
FROM php:8.2-apache

# Install dependencies (optional: add more if needed)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite (for URL rewriting)
RUN a2enmod rewrite

# Set the working directory to Apache's root
WORKDIR /var/www/html

# Ensure proper permissions for the web directory
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Copy the custom Apache configuration
COPY ./web/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy web files from your repository to Apache root
COPY ./web/ /var/www/html/

# Start Apache
CMD ["apache2-foreground"]
