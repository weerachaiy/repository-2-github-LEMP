สร้าง docker-compose.yml

สร้างไฟล์ชื่อ ``docker-compose.yml``  ใน VSC
```
version: '2'
services:

  php:
    image: nginx:alpine
    container_name: nginx
    restart: always
    volumes:
      - ./html/:/var/www/html
    ports:
      - 80:80

  db:
    image: mariadb:latest
    container_name: mariadb
    restart: always
    environment:
      - MYSQL_ROOT_PASSWORD=123132123
      - MYSQL_DATABASE=lemp_db
      - MYSQL_USER=lemp
      - MYSQL_PASSWORD=123456
```
