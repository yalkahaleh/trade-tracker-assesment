FROM php:8.2-apache

# Install PHP and PDO extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Cron
RUN apt-get update && apt-get install -y cron

# Install system dependencies for Composer
RUN apt-get update && apt-get install -y git zip unzip

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Copy application code and crontab file
COPY . /var/www/html
COPY crontab /etc/cron.d/laravel-scheduler

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/laravel-scheduler

# Apply cron job
RUN crontab /etc/cron.d/laravel-scheduler

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Apache configurations
EXPOSE 80
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Start cron and Apache on container start
CMD cron && apache2-foreground
