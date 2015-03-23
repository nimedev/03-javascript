#! /bin/bash
oriName=01-first-laravel
destName=test
user=niconator
rm -r /var/www/$destName
mkdir /var/www/$destName
cp -r ./* /var/www/$destName
chgrp www-data -R /var/www/$destName
chmod 775 -R /var/www/$destName
chmod g+s -R /var/www
usermod -a -G www-data $user
chown $user -R /var/www/$destName

