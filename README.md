# Fake Scammer Popup App #

This is a simple web application for displaying FAKE scammer style webpages.

This should only be used for education or scam-baiting purposes only.

### How do I get set up? ###

This app uses the laravel framework.

Check the laravel [documentation](https://laravel.com/docs/master/installation#server-requirements) for the server requirements.

You will also need:

* [Composer](https://getcomposer.org/)
* [Nodejs (npm)](https://nodejs.org/en/)

How to get running (Linux Instructions):

* Download or clone the repo code
* In a terminal go into the root directory of the project
* Type and run the command "composer install --no-dev" (you can leave off the --no-dev if you want the dev dependencies)
* Next run "npm install"
* Next run "cp .env.example .env"
* Next run "php artisan key:generate"
* Open the .env file in your favorite text editor and change all the fields you need to
* At this point the code is ready to go
* You can either point your web server to the public folder as the site root or run "php artisan serve" to start up php's local web server to test it out.

### Who do I talk to? ###

 * Repo owner or admin