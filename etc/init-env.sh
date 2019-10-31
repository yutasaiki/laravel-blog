#!/bin/bash

# Macで動作

composer install

touch database/database.sqlite
abspath="$(cd "$(dirname "$1")"; pwd -P)/$(basename "$1")"
sqlitePath=DB_DATABASE=${abspath}database/database.sqlite

cp .env.example .env
echo ${sqlitePath} >> .env

php artisan migrate
php artisan db:seed
php artisan key:generate

php artisan serve

