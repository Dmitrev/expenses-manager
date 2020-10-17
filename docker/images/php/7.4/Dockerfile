FROM php:7.4-fpm

# Install composer
RUN curl --silent --show-error https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer

ENV PATH "$PATH:/var/data/www/vendor/bin"

CMD ["php-fpm"]
