FROM php:cli-alpine

RUN docker-php-ext-install mbstring

ADD ./ /app

WORKDIR /app

ENTRYPOINT [ "./console" ]
