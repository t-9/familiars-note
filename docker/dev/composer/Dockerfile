FROM php:7.4.4-fpm-alpine3.11

LABEL maintainer="Chikage <t-9@atx.tokyo>"

COPY --from=composer /usr/bin/composer /usr/bin/composer

ENTRYPOINT ["composer"]
CMD ["-h"]