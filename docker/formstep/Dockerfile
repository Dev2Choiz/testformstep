FROM php:7.1-apache-jessie

MAINTAINER Dev2Choiz

WORKDIR /var/www/html/formstep

ENV DEBIAN_FRONTEND noninteractive

RUN useradd -ms /bin/bash formstep
ENV DEV_REMOTE_HOST 192.168.0.15

ENV APACHE_RUN_USER formstep
ENV APACHE_RUN_GROUP formstep
ENV APACHE_DOCUMENTROOT /var/www

COPY ./docker/formstep/php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
    && apt-get install -y curl vim \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update \
    && buildDeps=" \
        libz-dev \
        libmemcached-dev \
        git \
        libsqlite3-dev \
    " \
    && doNotUninstall=" \
        libmemcached11 \
        libmemcachedutil2 \
    " \
    && apt-get install -y $buildDeps --no-install-recommends \
    && git config --global core.autocrlf input \
    && rm -r /var/lib/apt/lists/* \
    \
    && docker-php-source extract \
        && git clone --branch php7 https://github.com/php-memcached-dev/php-memcached /usr/src/php/ext/memcached/ \
        && docker-php-ext-configure memcached \
        && docker-php-ext-install -j$(nproc) memcached mysqli pdo pdo_mysql pdo_sqlite zip bcmath sockets \
    && docker-php-source delete \
    \
    && apt-mark manual $doNotUninstall \
    && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false $buildDeps


RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.remote_host=192.168.0.15" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


CMD ["apache2-foreground"]
