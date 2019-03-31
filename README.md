docker run -it -p 8000:80 --name my-apache-php-app -v "$PWD/src":/var/www/html php:7.2-apache
