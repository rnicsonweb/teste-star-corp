FROM php:7.1-alpine

WORKDIR /var/www/html
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --install-dir=/usr/local/bin \
        --filename=composer \
        && php /usr/local/bin/composer --no-dev install

CMD ["php", "public/index.php"]
