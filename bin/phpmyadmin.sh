#!/usr/bin/env bash
# Description: Script file to install PhpMyAdmin inside Vagrant box(jankrib/ubuntu-gae-php)
#              and configure with apache2 to work on port 8888, username root password vagrant
# Author: Abdelaziz Elrashed(aeemh.sdn@gmail.com)
# Created Date: 10-03-2016 13:00 GMT+3

# new line variable
nl='
'

echo "Updating Repositroy..."
sudo apt-get -y update
sudo apt-get -y install debconf-utils

echo "Installing php5-gd..."
sudo apt-get -y install php5-gd

echo "Installing php5-mcrypt..."
sudo apt-get -y install php5-mcrypt

echo "Installing phpmyadmin..."
export DEBIAN_FRONTEND=noninteractive

sudo debconf-set-selections <<< 'phpmyadmin phpmyadmin/dbconfig-install boolean true'
sudo debconf-set-selections <<< 'phpmyadmin phpmyadmin/app-password-confirm password vagrant'
sudo debconf-set-selections <<< 'phpmyadmin phpmyadmin/mysql/admin-pass password root'
sudo debconf-set-selections <<< 'phpmyadmin phpmyadmin/mysql/app-pass password vagrant'
sudo debconf-set-selections <<< 'phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2'﻿

sudo apt-get -q -y install phpmyadmin

echo "Enable mcrypt Module..."
sudo php5enmod mcrypt

echo "Configure PhpMyAdmin to work in port(8888)..."
sudo mv /etc/phpmyadmin/apache.conf /etc/phpmyadmin/apache.conf.old
sudo echo "<VirtualHost *:8888>${nl}$(cat /etc/phpmyadmin/apache.conf.old)${nl}Alias / /usr/share/phpmyadmin/8888_web_root${nl}</VirtualHost>" > /etc/phpmyadmin/apache.conf

# Make apache Listen to port 8888 for PhpMyAdmin
sudo echo "Listen 8888" >> /etc/apache2/ports.conf 

echo "Restart apache2..."
# restart apache2
sudo service apache2 restart
