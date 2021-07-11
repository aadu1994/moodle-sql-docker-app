#!/bin/bash

sed -i "s/.*bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf


set -i "default_storage_engine = innodb "  /etc/mysql/mysql.conf.d/mysqld.cnf
set -i "innodb_file_per_table = 1"   /etc/mysql/mysql.conf.d/mysqld.cnf
set -i "innodb_file_format = Barracuda"  /etc/mysql/mysql.conf.d/mysqld.cnf

service mysql start


sleep 5


mysql -uroot -e "drop database moodle"


mysql -uroot -e "CREATE DATABASE moodle DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci"

#mysql -uroot -e "drop user UserMoodle"
#mysql -uroot -e "drop database moodle"


#service mysql start

#mysql -uroot -e" create user 'UserMoodle'@'localhost' IDENTIFIED BY 'moodle123'"

mysql -uroot -e "GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,CREATE TEMPORARY TABLES,DROP,INDEX,ALTER ON moodle.* TO 'UserMoodle'@'localhost' IDENTIFIED BY 'moodle123'"


mysql -uroot -e "GRANT ALL PRIVILEGES ON *.* TO 'UserMoodle'@'%' IDENTIFIED BY 'moodle123' with grant option"



mysql -uroot moodle < aspire_dump.sql

tail -f /dev/null
