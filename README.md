# Lydia

## 安裝所需
- docker
- docker-compose
- php:^8.0
- composer:^2.1

## PHP
要先讓本機的PHP版本為 8.* 以上

## composer

安裝composer

```bash
composer install
```

## npm

```bash
npm install
```

## .env 設定

複製一個.env 從 .env.local

## hosts 設定

```
# lydia
127.0.0.1   local.lydia.tw mysql
```

## 啟動

```
bash env.sh
```
依照指示 a. 啟動專案

## laravel

```
php artisan migrate
```
將所需的DB建立起來

```
php artisan db:seed
```
將所需的資料建立起來

## Log 在哪？

Nginx log: docker/nginx

Socket log: docker/node