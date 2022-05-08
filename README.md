สร้าง docker-compose.yml

สร้างไฟล์ชื่อ ``docker-compose.yml``  ใน VSC
```
version: '3'
services:
    nginx:
        build: ./nginx/
        container_name: ngix
        ports:
            - "80:80"
        volumes:
            - "./html/:/var/www/html/"
        restart: always
    php:
        image: php:7.0-fpm
        container_name: php
        volumes:
            - "./html/:/var/www/html/"
        restart: always
    mysqldb:
        image: mysql:${MYSQL_VERSION}
        container_name: ${MYSQL_HOST}
        restart: always
        env_file:
            - ".env"
        environment:
            - MYSQL_DATABASE=${MYSQL_DATABASE}
            - MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD}
            - MYSQL_USER=${MYSQL_USER}
            - MYSQL_PASSWORD=${MYSQL_PASSWORD}

```

สร้าง .env

สร้างไฟล์ชื่อ ``.env``  ใน VSC
```
#!/usr/bin/env bash

# PHP
PHP_VERSION=latest

# MySQL
MYSQL_VERSION=8.0.21
MYSQL_HOST=mysql
MYSQL_DATABASE=test
MYSQL_ROOT_USER=root
MYSQL_ROOT_PASSWORD=root
MYSQL_USER=dev
MYSQL_PASSWORD=dev
```

สั่งงาน docker-compose
```
docker-compose up -d
```

หยุดทำงาน docker-compose
```
docker-compose down
```
