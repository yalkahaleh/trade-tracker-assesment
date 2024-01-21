FROM php:8.2-apache

# Install PHP and PDO extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install system dependencies for Composer
RUN apt-get update && apt-get install -y git zip unzip

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Copy application code
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Apache configurations
EXPOSE 80
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Start Apache on container start
CMD ["apache2-foreground"]
