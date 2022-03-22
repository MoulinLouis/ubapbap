FROM php:7.4-fpm-bullseye

LABEL maintainer="moulin.louis93@gmail.com"

ENV APP_DEPENDENCIES \
        autoconf \
        libzip-dev \
        libmemcached11 \
        libmemcachedutil2 \
        build-essential \
        libmemcached-dev \
        libz-dev \
        libxml2-dev \
        libpq-dev \
        libzip-dev \
        libcurl4-openssl-dev \
        libonig-dev \
        libyaml-dev \
        libxml2-dev \
        libssl-dev \
        zlib1g-dev \
        curl \
        git \
        unzip \
        netcat \
        libpng-dev

ENV PHP_EXTENSIONS \
        opcache \
        mbstring \
        pdo_pgsql \
        pgsql \
        exif \
        zip \
        soap \
        gd \
	    intl

WORKDIR /var/www/html

# Install required extensions
RUN apt-get update && apt-get install -y ${APP_DEPENDENCIES}
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN docker-php-ext-install ${PHP_EXTENSIONS}
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql

#composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dep
RUN pecl install \
    redis \
    yaml \
    apcu

RUN docker-php-ext-enable \
    redis \
    yaml \
    apcu

COPY php.ini /usr/local/etc/php/conf.d/

EXPOSE 9000