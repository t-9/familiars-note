FROM nginx:1.17.9-alpine
FROM php:fpm-alpine3.10

LABEL maintainer="Chikage <t-9@atx.tokyo>"

COPY --from=composer /usr/bin/composer /usr/bin/composer