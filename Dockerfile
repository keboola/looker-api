ARG PHP_VERSION=7.0

FROM php:${PHP_VERSION:-7.0}

ENV DEBIAN_FRONTEND noninteractive
ARG COMPOSER_FLAGS="--prefer-dist --no-interaction"
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_PROCESS_TIMEOUT 3600
ENV PHP_VERSION=$PHP_VERSION

WORKDIR /code/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

RUN echo "PHP Version: $PHP_VERSION" && \
    if [ "${PHP_VERSION%.*}" = "5.6" ] ; then \
         echo "Using archive.debian.org..." \
         && echo 'Acquire::Check-Valid-Until "0";' > /etc/apt/apt.conf.d/99no-check-valid-until \
         && echo 'Acquire::AllowInsecureRepositories "true";' > /etc/apt/apt.conf.d/99allow-insecure \
         && sed -i 's/httpredir.debian.org/archive.debian.org/g' /etc/apt/sources.list \
         && sed -i 's/security.debian.org/archive.debian.org/g' /etc/apt/sources.list \
         && sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list \
         && sed -i '/jessie-updates/d' /etc/apt/sources.list \
         && echo 'deb http://archive.debian.org/debian/ jessie main' > /etc/apt/sources.list \
         && echo 'deb http://archive.debian.org/debian-security/ jessie/updates main' >> /etc/apt/sources.list \
         && apt-get -o Acquire::Check-Valid-Until=false update --allow-unauthenticated \
         && apt-get install git -y --no-install-recommends --allow-unauthenticated;  \
    else  \
        echo "Using standard repositories..." \
        && apt-get update -q \
        && apt-get install git -y --no-install-recommends ; \
    fi


## Composer - deps always cached unless changed
# First copy only composer files
COPY composer.* /code/
# Download dependencies, but don't run scripts or init autoloaders as the app is missing
RUN composer install $COMPOSER_FLAGS --no-scripts --no-autoloader
# copy rest of the app
COPY . /code/
# run normal composer - all deps are cached already
RUN composer install $COMPOSER_FLAGS
