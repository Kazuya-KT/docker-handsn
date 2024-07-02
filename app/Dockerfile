# ベースイメージとしてPHPを使用
FROM php:7.4-apache

# 必要なPHP拡張モジュールをインストール
RUN docker-php-ext-install mysqli

# PHPのRedis拡張モジュールをインストール
RUN pecl install redis && docker-php-ext-enable redis

# Apacheの設定ファイルにServerNameを追加
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Apacheをフォアグラウンドで実行
CMD ["apache2-foreground"]

