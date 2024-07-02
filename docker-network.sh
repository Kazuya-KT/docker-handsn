#!/bin/sh

# ネットワークの作成
docker network create app-network

# Redisコンテナの起動
docker run -d --name redis --network app-network redis:alpine

# PHPアプリケーションコンテナのビルド（Dockerfileの不備により失敗するはず）
docker build -t my-php-app ./app

# PHPアプリケーションコンテナの起動（ビルドが成功した場合）
docker run -d --name app --network app-network \
    -e REDIS_HOST=redis \
    -p 8080:80 \
    -v "$(pwd)/app:/var/www/html" \
    my-php-app
