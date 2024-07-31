FROM php:7.4-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el contenido del directorio raíz al directorio /var/www/html en el contenedor
COPY . /var/www/html

# Copiar archivo de configuración de Apache
COPY ./apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Ajustar los permisos de los archivos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
