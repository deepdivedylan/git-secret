FROM richarvey/nginx-php-fpm
RUN rm /var/www/html/index.php
COPY site /var/www/html
EXPOSE 80