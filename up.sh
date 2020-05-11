#!/usr/bin/env bash

docker-compose down
docker pull rossedlin/centos-apache-php:7.1
docker-compose up