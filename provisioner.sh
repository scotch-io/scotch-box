#! /bin/bash

if [ -d /var/www/aliases ];
then
  find /var/www/aliases -maxdepth 1 -type l -exec rm -f {} \;
  rmdir /var/www/aliases
fi

mkdir /var/www/aliases

for d in /var/www/* ; do
  BASE=$(basename $d);
  if [ $BASE == 'aliases' ]
  then
    continue;
  fi
  DIR=$(dirname $d);
  ALIAS='';
  if [ -f $d/.scotchroot ]
  then
    sudo sed 's/^M$//' $d/.scotchroot >$d/.scotchroot.tmp && mv $d/.scotchroot.tmp $d/.scotchroot
    sudo tr -d '\r' < $d/.scotchroot > $d/.scotchroot.tmp && mv $d/.scotchroot.tmp $d/.scotchroot
    ALIAS=$(<$d/.scotchroot);
  fi
  ln -s $d/$ALIAS $DIR/aliases/$BASE.local
  ln -s $d/$ALIAS $DIR/aliases/www.$BASE.local
done

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
sudo echo "VirtualDocumentRoot /var/www/aliases/%0" >> /etc/apache2/mods-available/vhost_alias.conf

sudo echo "<Directory '/var/www/aliases'>" >> /etc/apache2/mods-available/vhost_alias.conf
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

# Set some very lax php.ini settings for local development
upload_max_filesize=100M
post_max_size=100M
max_execution_time=600
max_input_time=600
memory_limit=512M
for key in upload_max_filesize post_max_size max_execution_time max_input_time memory_limit
do
 sed -i "s/^\($key\).*/\1 $(eval echo = \${$key})/" /etc/php5/apache2/php.ini
done

service apache2 restart
