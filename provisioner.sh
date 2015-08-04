#! /bin/bash

# create and enable rewrite loader
echo "Creating Apache rewrite.load"
sudo echo "LoadModule rewrite_module /usr/lib/apache2/modules/mod_rewrite.so" > /etc/apache2/mods-available/rewrite.load

# enable Apache mod_rewrite
sudo a2enmod rewrite

# create and enable vhost_alias loader
echo "Creating Apache vhost_alias.load"
sudo echo "LoadModule vhost_alias_module /usr/lib/apache2/modules/mod_vhost_alias.so" > /etc/apache2/mods-available/vhost_alias.load

# create our vhost_alias.conf file
echo "Creating Apache vhost_alias.conf"
sudo echo "UseCanonicalName Off" > /etc/apache2/mods-available/vhost_alias.conf
sudo echo "VirtualDocumentRoot /var/www/%0" >> /etc/apache2/mods-available/vhost_alias.conf

sudo echo "<Directory '/var/www'>" >> /etc/apache2/mods-available/vhost_alias.conf
sudo echo "Options Indexes FollowSymLinks MultiViews" >> /etc/apache2/mods-available/vhost_alias.conf
sudo echo "AllowOverride all" >> /etc/apache2/mods-available/vhost_alias.conf
sudo echo "Order allow,deny" >> /etc/apache2/mods-available/vhost_alias.conf
sudo echo "allow from all" >> /etc/apache2/mods-available/vhost_alias.conf
sudo echo "</Directory>" >> /etc/apache2/mods-available/vhost_alias.conf

# enable Apache mod_rewrite
sudo a2enmod vhost_alias


# Install phpmyadmin silently
#echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections
#echo "phpmyadmin phpmyadmin/dbconfig-install boolean true" | debconf-set-selections
#echo "phpmyadmin phpmyadmin/mysql/admin-user string root" | debconf-set-selections
#echo "phpmyadmin phpmyadmin/mysql/admin-pass password root" | debconf-set-selections
#echo "phpmyadmin phpmyadmin/mysql/app-pass password" |debconf-set-selections
#echo "phpmyadmin phpmyadmin/app-password-confirm password" | debconf-set-selections
#apt-get -q -y install phpmyadmin

service apache2 reload