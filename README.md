# Fake Scammer Popup App #

This is a simple web application for displaying FAKE scammer style webpages.

This should only be used for education or scam-baiting purposes only.

This allows you to display FAKE error / virus messages with some dynamic fields you get to set before displaying the page, like the scammer's phone number.

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

### How do I use the popups? ###

Once the code is installed and running just point your browser to http://{ip address}/create

This app was created with the intention that it would not have a domain associated with it, but instead you can use your computer's hosts file to make up domain names for it on the fly.

The root web page was also intentionally left blank in case the scammer tries to go to the fake domain after closing the message to see it again, we wouldn't want them to see the creation page after all.

### Who do I talk to? ###

 * Repo owner or admin
 
### I want to see it now ###

Okay go to http://45.77.73.52/create

Feel free to use that server until if I have to take it down if things get out of control.
