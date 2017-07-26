#!/bin/bash
rm -rf /run/httpd/* /tmp/httpd*
mkdir /var/www/html
chown -R root:root /var/www/html
ln -s /var/www/public_html /var/www/html
/usr/sbin/apachectl -DFOREGROUND
