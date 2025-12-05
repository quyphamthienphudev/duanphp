FROM php:8.2-apache

# Cài đặt PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copy toàn bộ source từ thư mục gốc vào Apache
COPY . /var/www/html/

# Cho phép ghi file nếu cần
RUN chmod -R 755 /var/www/html
