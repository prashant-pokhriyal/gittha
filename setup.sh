#!/usr/bin/env  bash
username=${1:-root}
password=${1:-""}
database=${1:-urls}
table=short_urls

mysql -u root -p$password -e "create database $database"
mysql -u root -p$password  $database < ./sql/schema.sql