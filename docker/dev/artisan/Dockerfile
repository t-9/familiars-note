FROM php:7.4.4-fpm-alpine3.11

LABEL maintainer="Chikage <t-9@atx.tokyo>"

RUN docker-php-ext-install pdo_mysql
RUN apk add --no-cache --virtual .pecl-deps \
    autoconf \
    gcc \
    g++ \
    make && \
    pecl install redis && \
    apk del .pecl-deps

ENTRYPOINT ["php", "artisan"]
CMD ["-h"]