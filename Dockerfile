FROM elrincondeisma/octane:latest

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=spiralscout/roadrunner:2.4.2 /usr/bin/rr /usr/bin/rr

WORKDIR /app

# Copiar el contenido del proyecto
COPY . .

# Limpiar dependencias previas si existen
RUN rm -rf /app/vendor
RUN rm -rf /app/composer.lock

# Instalar dependencias de Composer
RUN composer install --no-interaction --prefer-dist

# Instalar Octane y Roadrunner
RUN composer require laravel/octane spiral/roadrunner

# Copiar archivo .env
COPY .env.example .env

# Crear directorio de logs
RUN mkdir -p /app/storage/logs  

# Limpiar cachés de Laravel
RUN php artisan cache:clear
RUN php artisan view:clear
RUN php artisan config:clear

# Instalar Octane con Swoole
RUN php artisan octane:install --server="swoole"

# Exponer el puerto
EXPOSE 8000

# Iniciar Octane
CMD ["php", "artisan", "octane:start", "--server=swoole", "--host=0.0.0.0"]
