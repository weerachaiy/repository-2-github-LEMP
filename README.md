สร้าง docker-compose.yml

สร้างไฟล์ชื่อ ``docker-compose.yml``  ใน VSC
```
version: '3'
services:
    web:
        image: nginx:alpine
        volumes:
            - "./etc/nginx/default.conf:/etc/nginx/conf.d/default.conf"
            - "./etc/ssl:/etc/ssl"
            - "./web:/var/www/html"
            - "./etc/nginx/default.template.conf:/etc/nginx/conf.d/default.template"
        ports:
            - "8000:80"
            - "3000:443"
        environment:
            - NGINX_HOST=${NGINX_HOST}
        command: /bin/sh -c "envsubst '$$NGINX_HOST' < /etc/nginx/conf.d/default.template > /etc/nginx/conf.d/default.conf && nginx -g 'daemon off;'"
        restart: always
        depends_on:
            - php
            - mysqldb
    php:
        image: nanoninja/php-fpm:${PHP_VERSION}
        restart: always
        volumes:
            - "./etc/php/php.ini:/usr/local/etc/php/conf.d/php.ini"
            - "./web:/var/www/html"
    composer:
        image: "composer"
        volumes:
            - "./web/app:/app"
        command: install
    myadmin:
        image: phpmyadmin/phpmyadmin
        container_name: phpmyadmin
        ports:
            - "8080:80"
        environment:
            - PMA_ARBITRARY=1
            - PMA_HOST=${MYSQL_HOST}
        restart: always
        depends_on:
            - mysqldb
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
        ports:
            - "8989:3306"
        volumes:
            - "./data/db/mysql:/var/lib/mysql"
```
