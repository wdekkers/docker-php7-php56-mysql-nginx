# PHP 7 & PHP 5.6 Docker environment with MySQL running with nginx.
Docker with the following containers: PHP 7, PHP 5.6 and MySQL and nginx. Based on an docker-compose.yml file

For now it only works with PHP files. the nginx still need some tweaks to load images for example.

# Requirements
- Docker
- Virtualbox (mostly comes / gets installed with docker)
- Little bit of git knowledge (to clone)

This configution is made on `OSX` but should be working in every other operating system

Note this document is based on the standard first up of docker (192.168.99.100) if this is different for your current situation please replace all IP addresses in your setup too.

Go to your terminal and Clone or fork the project.


- browse into `cd docker-php7-php56-mysql-nginx`
- open a DOCKER terminal 
- `sudo vi /etc/hosts`
- add or replace IP with your docker IP: `192.168.99.100 php7.local php56.local`
- Type in the docker terminal: `docker-compose build`
- Type in the docker terminal: `docker-compose run`

Now open your browser and go to: `http://php7.local/`
in your browser you should see a PHP 7 info page. 

There is also a file called `db.php` in PHP 7 where you can see a working connection with MySQL in PHP 7

When you open: `http://php56.local/` 
in your browser you should see a PHP 56 info page

You can add more `Virtual Hosts` in `nginx.conf` both PHP examples are in there.

When you want to change the database name and password take a look into `docker-compose.yml`
