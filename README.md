Scotch Box
==========

## Check out the official docs at: [box.scotch.io][16]
## [Read the getting started article](https://scotch.io/bar-talk/introducing-scotch-box-a-vagrant-lamp-stack-that-just-works)
## [Read the 2.0 release article](https://scotch.io/bar-talk/announcing-scotch-box-2-0-our-dead-simple-vagrant-lamp-stack-improved)
## [Read the 2.5 release article](https://scotch.io/bar-talk/announcing-scotch-box-2-5)

![Scotch Box](https://scotch.io/wp-content/uploads/2015/11/scotch-box-2.5-share.png)

Scotch Box is a preconfigured Vagrant Box with a full array of LAMP Stack features to get you up and running with Vagrant in no time.

A lot of PHP websites and applications don’t require much server configuration or overhead at first. This box should have all your needs for doing basic development so you don’t have to worry about configuring Vagrant and you can simply focus on your code.

No provisioning tools or setup is really even required with Scotch Box. Since everything is packaged into the box, running “vagrant” is super fast, you’ll never have to worry about your environment breaking with updates, and you won’t need Internet to code.


![Scotch Box](https://scotch.io/wp-content/uploads/2015/11/Screen-Shot-2015-11-03-at-1.31.52-PM.png)


## What and Why

Vagrant is an extremely powerful tool. With Chef or Puppet and Vagrant, you can configure any type of server environment you can think of. The possibilities are endless (especially with Docker in the picture now, too). Speaking candidly though, most the development I do doesn't really stray from a default LAMP stack, and when I have to configure a server, I really am always just setting up a boring typical LAMP stack anyways. **All I really want is PHP 5.6 and a bunch of modules with zero hassle or overhead**.

I used to use this seriously awesome [Vagrant LAMP Stack][1] that I even wrote about [here][2]. The problem with this is it broke a lot. It broke when Vagrant updated, it broke when Chef updated, and it broke when Berkshelf updated. On top of that, I always had problems getting it working on Windows. There are just too many points of failures for what it's purpose was for me - simply just developing locally.

So that's why I decided to build a Vagrant LAMP Box. The box is prepackaged and requires provisioning and no configuration. You simply boot it up and it just works. **It's not for every project, but it sure will help you get straight to it with a lot of them**.


> Are you new to Vagrant? If you're new to Vagrant, check out our [getting started guide with Vagrant][2] article, our [Vagrant Share article][10], and our article on [Laravel’s Vagrant stack Homestead][11]. If you follow the first tutorial, you can just learn the Vagrant commands but use the Scotch Box instead.


![Scotch Box SSH](https://cask.scotch.io/2014/10/scotch-box-ssh.jpg)


## Features

### System Stuff

- Ubuntu 14.04 LTS (Trusty Tahr)
- PHP 5.6
- Ruby 2.2.x
- Vim
- Git
- cURL
- GD and Imagick
- Composer
- Beanstalkd
- Node
- NPM
- Mcrypt

### Database Stuff
- MySQL
- PostgreSQL
- SQLite

### Caching Stuff

- Redis
- Memcache and Memcached

### Node Stuff

- Grunt
- Bower
- Yeoman
- Gulp
- Browsersync
- PM2

### Laravel Stuff

- Laravel Installer
- Laravel Envoy
- Blackfire Profiler

### Other Useful Stuff

- No Internet connection required
- PHP Errors turned on
- Laravel and WordPress ready
- Operating System agnostic
- Goodbye XAMPP / WAMP
- New Vagrant version? Update worry free. ScotchBox is very reliable with a lesser chance of breaking with various updates
- Super easy database access and control
- [Virtual host ready](https://scotch.io/bar-talk/announcing-scotch-box-2-0-our-dead-simple-vagrant-lamp-stack-improved#multiple-domains-(virtual-hosts))
- PHP short tags turned on
- H5BP’s server configs
- MIT License



## Get Started

* Download and Install [Vagrant][3]
* Download and Install [VirtualBox][4]
* Clone the Scotch Box [GitHub Repository](https://github.com/scotch-io/scotch-box)
* Run ``` vagrant up ```
* Access Your Project at  [http://192.168.33.10/][14]

## Basic Vagrant Commands


### Start or resume your server
```bash
vagrant up
```

### Pause your server
```bash
vagrant suspend
```

### Delete your server
```bash
vagrant destroy
```

### SSH into your server
```bash
vagrant ssh
```



## Database Access

### MySQL 

- Hostname: localhost or 127.0.0.1
- Username: root
- Password: root
- Database: scotchbox

### PostgreSQL

- Hostname: localhost or 127.0.0.1
- Username: root
- Password: root
- Database: scotchbox
- Port: 5432


### MongoDB

- Hostname: localhost
- Database: scotchbox
- Port: 27017


## SSH Access

- Hostname: 127.0.0.1:2222
- Username: vagrant
- Password: vagrant

## Mailcatcher

Just do:

```
vagrant ssh
mailcatcher --http-ip=0.0.0.0
```

Then visit:

```
http://192.168.33.10:1080
```


## Installing WordPress

![WPDistillery](http://wpdistillery.org/sharedcontent/wpdistillery_logo_lowpadding.png)

WPDistillery does all the work for you when setting up a new WordPress project on Scotch Box. You can add your  preferred settings into a configuration file and WPDistillery will set up WordPress for you:
* download/install/configure WordPress in your language
* set WordPress options
* install/activate your favorite WordPress theme
* install/activate the plugins you defined in the config
* clean WordPress defaults (contents, plugins, themes, unused files)

Check out the documentation at the [WPDistillery](https://github.com/flurinduerst/WPDistillery) repository.


## Updating the Box

Although not necessary, if you want to check for updates, just type:

```bash
vagrant box outdated
```

It will tell you if you are running the latest version or not, of the box. If it says you aren't, simply run:

```bash
vagrant box update
```


## Setting a Hostname

If you're like me, you prefer to develop at a domain name versus an IP address. If you want to get rid of the some-what ugly IP address, just add a record like the following example to your computer's host file.

```bash
192.168.33.10 whatever-i-want.local
```

Or if you want "www" to work as well, do:

```bash
192.168.33.10 whatever-i-want.local www.whatever-i-want.local
```

Technically you could also use a Vagrant Plugin like [Vagrant Hostmanager][15] to automatically update your host file when you run Vagrant Up. However, the purpose of Scotch Box is to have as little dependencies as possible so that it's always working when you run "vagrant up".


## Configuration

You may want to change some of the out-of-the-box configurations for
the various parts that come with Scotch Box.  To do so, `vagrant ssh`
into the box, and edit the appropriate file.  For example, to change
PHP settings:

    vagrant ssh
    sudo vim /etc/php5/apache2/conf.d/user.ini

Note that the changes that you make will be for the current running
Scotch Box only.  If you `vagrant destroy` and then `vagrant up` your
box again, these manual configuration changes will be lost.

If you prefer to automate your configuration changes so that you can
destroy and re-create boxes as needed, Vagrant allows you to create a
"provision script" that runs as part of `vagrant up`.  See the
[Vagrant
documentation](https://docs.vagrantup.com/v2/getting-started/provisioning.html)
for notes.  For example, you could add the following line to your
Vagrantfile under the `config.vm.hostname = "scotchbox"` line:

    config.vm.provision :shell, path: "bootstrap.sh"

and then create `bootstrap.sh` with the following content in the same
directory as the Vagrantfile:

    #!/bin/bash
    # Disable Zend OPcache
    sed -i 's/;opcache.enable=0/opcache.enable=0/g' /etc/php5/apache2/php.ini

This script will be run each time you `vagrant up`, and it can be run
on an already-up box using `vagrant provision`.

## PHP7 Install Instructions

```
sudo apt-get update
sudo add-apt-repository ppa:ondrej/php
sudo apt-get install php7.0
sudo apt-get update
sudo apt-get install php7.0-mysql libapache2-mod-php7.0
sudo a2dismod php5
sudo a2enmod php7.0
sudo apachectl restart
```


## The MIT License (MIT)

Copyright (c) 2014-2015 Nicholas Cerminara, scotch.io, LLC

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.



 [1]: https://github.com/MiniCodeMonkey/Vagrant-LAMP-Stack
 [2]: http://scotch.io/tutorials/get-vagrant-up-and-running-in-no-time
 [3]: https://www.vagrantup.com/downloads.html
 [4]: https://www.virtualbox.org/wiki/Downloads
 [5]: http://www.sequelpro.com/
 [6]: http://www.navicat.com/
 [7]: http://github.com/scotch-io
 [8]: http://twitter.com/scotch_io
 [9]: https://github.com/smdahlen/vagrant-hostmanager
 [10]: http://scotch.io/tutorials/sharing-your-virtual-machine-on-the-web-with-vagrant-share
 [11]: http://scotch.io/tutorials/php/getting-started-with-laravel-homestead
 [12]: https://www.vagrantup.com/downloads.html
 [13]: https://www.virtualbox.org/wiki/Downloads
 [14]: http://192.168.33.10/
 [15]: https://github.com/smdahlen/vagrant-hostmanager
 [16]: http://box.scotch.io
 [17]: http://scotch.io/bar-talk/introducing-scotch-box-a-vagrant-lamp-stack-that-just-works
