
# docker-php7-php56-mysql-nginx
Docker container with PHP 7, PHP 5.6 and MySQL with nginx

Note this document is based on the standard first up of docker (192.168.99.100) if this is different for your current situation please replace all IP addresses in your setup too.

Go to your terminal and Clone or fork the project.


browse into 

cd docker-php7-php56-mysql-nginx

open a docker terminal
sudo vi /etc/hosts

add or replace IP with your docker IP: 
192.168.99.100 php7.local php56.local



docker-compose build

docker-compose run

When you open:
http://php7.local/ 
in your browser you should see a PHP 7 info page

When you open:
http://php56.local/ 
in your browser you should see a PHP 56 info page