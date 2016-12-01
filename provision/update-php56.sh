#!/usr/bin/env bash

apt-get()
{
	DEBIAN_FRONTEND=noninteractive command apt-get \
    -o Dpkg::Options::="--force-confdef" \
    -o Dpkg::Options::="--force-confold" \
    "$@"
}

# Disable obsolete PPA
echo "============================================"
echo "Disabling and deleting obsolete PPA."
echo "============================================"
# sudo apt-get install ppa-purge
# sudo ppa-purge ppa:ondrej/php5-5.6
sudo add-apt-repository --remove ppa:ondrej/php5-5.6 -y
# Force incase
sudo rm /etc/apt/sources.list.d/ondrej-php5-5_6-trusty.list
# Update to current PPA
echo "============================================"
echo "Adding current PPA and updating packages."
echo "============================================"
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update
# Install PHP 5.6 Packages
echo "============================================"
echo "Installing PHP 5.6 and common packages."
echo "============================================"
sudo apt-get install libapache2-mod-php5.6 -y
sudo apt-get install php5.6 php5.6-cgi php5.6-cli php5.6-common php5.6-curl php5.6-fpm php5.6-gd \
php5.6-intl php5.6-mcrypt php5.6-memcache php5.6-memcached php5.6-mongo php5.6-mysqlnd php5.6-pgsql \
php5.6-readline php5.6-redis php5.6-sqlite php5.6-mbstring php5.6-zip php5.6-json php5.6-xdebug php5.6-xml php-imagick -y
sudo a2dismod php5
sudo a2enmod php5.6
# uninstall old php5 packages
sudo apt-get autoremove
sudo apt-get --purge remove php5-common php5-json php5-imagick -y
# Clean up Apt
sudo apt-get clean
# Configure Xdebug
echo "============================================"
echo "Configure Xdebug."
echo "============================================"
echo "; xdebug
zend_extension=xdebug.so
xdebug.remote_enable=1
xdebug.remote_connect_back=1
xdebug.remote_port=9000
xdebug.remote_host=192.168.33.10" >> /etc/php5/apache2/conf.d/20-xdebug.ini
# add composer to path
echo "============================================"
echo "Adding composer to PATH."
echo "============================================"
export PATH="~/.composer/vendor/bin:$PATH"
# restart Apache
echo "============================================"
echo "Restarting Apache and PHP-FPM."
sudo service apache2 restart
sudo service php5.6-fpm restart
echo "============================================"
echo "============================================"
echo "Provision complete."
echo "============================================"