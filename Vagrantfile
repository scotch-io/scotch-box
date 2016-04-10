# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    
    # PhpMyAdmin at 8888
    config.vm.network "forwarded_port", guest: 8888, host: 8888
   
    config.vm.network "private_network", ip: "192.168.33.10"
 
    config.vm.hostname = "scotchbox"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    
    # Provision to install PhpMyAdmin
    config.vm.provision :shell, :privileged => true,   :path => "bin/phpmyadmin.sh"
end
