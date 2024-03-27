# Meninb birinchi docker fayilim

FROM debian:buster-slim

RUN apt-get update
RUN apt-get install -y nginx apache2 php

COPY ./index.php /var/www/html

CMD ["apache2ctl", "-D", "FOREGROUND"]
