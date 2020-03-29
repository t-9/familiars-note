FROM php:7.4.4-fpm-alpine3.11

LABEL maintainer="Chikage <t-9@atx.tokyo>"

ADD phive.xml /var/www/html
RUN apk add --no-cache --virtual .phive-deps \
    gnupg && \
    wget -O phive.phar https://phar.io/releases/phive.phar && \
    wget -O phive.phar.asc https://phar.io/releases/phive.phar.asc && \
    gpg --keyserver pool.sks-keyservers.net --recv-keys 0x9D8A98B29B2D5D79 && \
    gpg --verify phive.phar.asc phive.phar && \
    chmod +x phive.phar && \
    mv phive.phar /usr/local/bin/phive && \
    yes | phive install && \
    apk del .phive-deps

ENTRYPOINT ["tools/phpcs"]
CMD ["-w"]