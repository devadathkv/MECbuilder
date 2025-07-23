# Use the official PHP 8.2 image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    libpq-dev \
    zip unzip git curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Configure GD for PHP 8.2
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd zip

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files into container
COPY . /var/www

# Set folder permissions
RUN chown -R www-data:www-data /var/www

# Set permissions for Laravel
RUN mkdir -p /var/www/storage/framework/sessions /var/www/storage/framework/views /var/www/storage/framework/cache \
    && mkdir -p /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Expose port 8000 and start Laravel dev server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
