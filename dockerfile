# Menggunakan PHP 8.2 dengan FPM sebagai base image
FROM php:8.2-fpm 

# Set working directory di dalam container
WORKDIR /var/www/html

# Install dependensi yang diperlukan
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libssl-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js 21 dari NodeSource
RUN curl -fsSL https://deb.nodesource.com/setup_21.x | bash - \
    && apt-get install -y nodejs

# Install Node.js, npm, dan pnpm
RUN npm install -g pnpm

# Copy file konfigurasi PHP jika ada
# COPY ./php/local.ini /usr/local/etc/php/conf.d/local.ini

# Berikan permission yang benar
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Expose port 9000 agar bisa diakses Nginx
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]