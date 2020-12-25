# Github public api search
## this is basic implementation for list repos from github
### Features
- [x] List repos from github
- [x] Filter based on multiple filters which send by api

**tests**

* it test it return the same number of per_page filter

**postman collection**

* Doc: https://documenter.getpostman.com/view/3539387/TVsxB6hs

#### Setup & installation
* git clone git@github.com:mohammedabdallah/popularRepos.git
* cd popularRepos
* composer install
* create database and update .env with it's name and database password
* RUN this command and change as u want (FORWARD_DB_PORT=3307 APP_PORT=5000  ./vendor/bin/sail up)
* Run this to run unit test (./vendor/bin/phpunit)
### Specs
* PHP 8 
* laravel 8
