#!/usr/bin/env bash

apt-get()
{
	DEBIAN_FRONTEND=noninteractive command apt-get \
    -o Dpkg::Options::="--force-confdef" \
    -o Dpkg::Options::="--force-confold" \
    "$@"
}

# Optional
echo "============================================"
echo "Upgrading all system packages and kernel, this may take a while."
echo "============================================"
sudo apt-get upgrade -y
sudo apt-get clean
sudo reboot