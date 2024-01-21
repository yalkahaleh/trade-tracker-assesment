
FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

