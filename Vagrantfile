# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    
    # This is Scotch Box 3.0 (the free version)
    # _________________________________________
    # If you want PHP7, MySQL 5.7, Ubuntu 16.04, Build Scripts (customize your own boxes in minutes)...
    # ... an NGINX version, PHPUnit, Yarn, WebPack, improved email testing with MailHog...
    # ... generally Higher versions of things, Ruby (via RVM), Node (via NVM), WebPack ready, and more.
    
    # Just go to https://box.scotch.io/pro
    # Your support will help keep this project alive!

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "scotchbox"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

end
