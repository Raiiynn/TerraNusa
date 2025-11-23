# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Salin aplikasi ke dalam folder /var/www/html di container
COPY ./ /var/www/html/

# Salin konfigurasi Apache ke dalam container
COPY ./apache-config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Expose port 80 agar aplikasi bisa diakses
EXPOSE 80
