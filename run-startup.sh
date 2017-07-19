#!/bin/bash
rm -rf /run/httpd/* /tmp/httpd*
/usr/sbin/apachectl -DFOREGROUND
