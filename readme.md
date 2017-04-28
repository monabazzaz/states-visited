## States Visited Application

This application implements vue.js on the front-end and a Laravel API on the back-end for a user who wants to track how many of the 50 states in America they have been to. It integrates PHP in order to allow a user to add multiple properties regarding each state added. A user can document the name of a state, the year they visited, the number of days they spent there, any specifics notes they might have and rate the state on a scale of 0 to 5. Thanks to Representational State Transfer, or REST, users have the ability to create, read, update or delete content within their database via AJAX. There are four HTTP methods: GET, POST, PUT and DELETE, which allow users to request changes to their entries in the database.

## Installation Instructions

1. Clone this repository
2. Set up MAMP to run on the public folder inside that project folder via preferences in MAMP
3. Set apache and nginx ports to 8888
4. Set mysql on 8889
5. Install composer through getcomposer.org. This will allow you to create laravel projects.
6. Create a new database in phpmyadmin called app
7. Run php artisan:migrate
8. Install the chrome extension vue.js
9. Run npm run hot
10. Visit http://localhost:8888

## Official Documentation

Documentation for the website can be found on the [Laravel Website](https://laravel.com).

## Gitbook Documentation

Documentation for this API in Gitbook can be found [here](https://monabazzaz.gitbooks.io/states-visited/content/).
