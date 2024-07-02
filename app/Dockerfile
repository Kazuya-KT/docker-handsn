# ビルドステージ
FROM php:7.4-cli as build

RUN docker-php-ext-install mysqli
RUN pecl install redis && docker-php-ext-enable redis

# 実行ステージ
FROM php:7.4-apache

# ビルドステージからアプリケーションコードをコピー
COPY --from=build /var/www/html /var/www/html
COPY nonexistent_directory/index.php /var/www/html/

# Apacheの設定ファイルにServerNameを追加
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Apacheをフォアグラウンドで実行
CMD ["apache2-foreground"]

CMD echo "Hey you! If you use more than one CMD command, only the latter one will be effective!"

