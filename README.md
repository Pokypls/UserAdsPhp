# UserAdsPhp

Made by Boglarka Balint.

It is a simple PHP web application that can list users and their advertisements on different HTML pages.

## Install application

1. install a webserver that is able to run PHP (like WAMP)
2. import the database stored in the model/sql/databaseExported.sql file
  - this will create the database tables and fill it with basic data
3. copy the application files under the correct folder of web server (like www/ )
4. start webserver (listening on port 8080)

## How to use the application

To access the start page, navigate to page your webserver's home + /view/index
For example: http://localhost/view/index

## Technical info

PHP version: 8.0.26

Uses MVC pattern:
 - model: SQL connection, returns raw data from the database
 - controller: gets raw data using the model and transforms that to PHP objects
 - view: create HTML from the PHP objects provided by the controller
