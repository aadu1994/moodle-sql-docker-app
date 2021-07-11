#!/bin/bash


sudo docker build -f Dockerfile1 -t moodle_mysql_image .

sudo docker build -f Dockerfile -t moodle_application_image .

sudo docker-compose up -d

sleep 10
