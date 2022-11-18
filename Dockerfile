FROM php:8.1.2-fpm

ARG user=aline
ARG uid=1000

WORKDIR /var/www

COPY . /var/www
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    gdal-bin \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user


USER $user

EXPOSE 9000
CMD ["php-fpm"]
