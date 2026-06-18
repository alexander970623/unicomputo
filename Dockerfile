FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN cp .env.example .env || true

RUN php artisan key:generate --force || true

RUN php artisan config:cache || true

RUN chown -R nginx:nginx /var/www/html/storage
RUN chown -R nginx:nginx /var/www/html/bootstrap/cache

EXPOSE 8080