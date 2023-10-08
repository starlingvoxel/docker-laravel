# Utiliza una imagen base de PHP con Apache
FROM php:8.1-apache

# Establece la variable de entorno APACHE_LOG_DIR
ENV APACHE_LOG_DIR /var/log/apache2

# Instala extensiones de PHP y otras dependencias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql



# Configura el servidor web Apache y habilita el módulo rewrite
RUN a2enmod rewrite

# Copia los archivos de la aplicación Laravel a la imagen
COPY ./ /var/www/html/

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de Composer
RUN composer install

# Cambia los permisos de almacenamiento (ajusta según sea necesario)
RUN chown -R www-data:www-data /var/www/html/storage

# Exponer el puerto 80 del servidor web
EXPOSE 80

# Comando de inicio para el servidor Apache
CMD ["apache2-foreground"]
# Copia el archivo de configuración del VirtualHost
 COPY host.conf /etc/apache2/sites-available/host.conf

# Habilita el VirtualHost
RUN a2ensite host.conf