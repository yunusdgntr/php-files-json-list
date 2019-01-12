#!/bin/bash
# Yunus Dogan 12.01.2019 yunusdgntr[@gmail.com]

apt-get update \
&& apt-get install -y apache2 \
&& apt-get install -y apache2 php7.0 libapache2-mod-php7.0 \
&& service apache2 restart \
&& cp images.php /var/www/html \
&& cp -R ./images /var/www/html
