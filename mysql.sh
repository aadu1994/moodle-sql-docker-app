#!/bin/sh


service mysql start

sleep 5

mysql -u root -e "CREATE DATABASE moodle"


mysql -u root moodle < moodle-latest-backup.sql
