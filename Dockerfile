FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite

# Make Apache use PORT 8000
RUN sed -i 's/80/8000/g' /etc/apache2/ports.conf \
    && sed -i 's/:80/:8000/g' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 8000
