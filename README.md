สร้าง docker-compose.yml

สร้างไฟล์ชื่อ ``docker-compose.yml``  ใน VSC
```
version: '3'
services:
    nginx:
        image: nginx:alpine
        container_name: nginx
        ports:
            - "80:80"
        volumes:
            - "./html/:/var/www/html/"
            - "./nginx/default.conf:/etc/nginx/conf.d/default.conf"
        restart: always
    php:
        image: php: php:7.4-fpm-alpine
        container_name: php
        volumes:
            - "./html/:/var/www/html/"
        restart: always
    mysqldb:
        image: mysql:latest
        container_name: mysqldb
        ports:
            - "3306:3306"
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

# MySQL
MYSQL_DATABASE=test
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
