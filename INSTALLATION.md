# Installing & Configuring Web Server - PHP

Step 1: Install Apache
yum install httpd -y
vi /etc/hostname

Step 2: Install PHP and MySQL
dnf module -y enable php:8.1
dnf module -y install php:8.1/common
yum install mysql -y
yum install php-mysqli -y

