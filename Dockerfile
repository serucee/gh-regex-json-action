FROM php:7.4-cli

COPY . /usr/local/bin

CMD [ "php", "/usr/local/bin/main.php" ]