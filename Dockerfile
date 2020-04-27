FROM php:7.4-cli

COPY /github/home/ /github/home/
COPY . /usr/local/bin

CMD [ "php", "/usr/local/bin/main.php" ]