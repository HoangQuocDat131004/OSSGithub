# Sử dụng PHP kèm Apache (Web server phổ biến cho PHP thuần)
FROM php:8.2-apache

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Copy toàn bộ code PHP vào trong container
COPY . .

# Mở cổng 80 (Cổng mặc định của Apache)
EXPOSE 80