# An example of TDD with Laravel Framework

I'm switching to TDD (Test Driven Development) in my daily work. It's been a nice experience, and I'm really enjoying the TDD approach: developing in the Red, Green, Refactory cicle.

This repository, is a little example of TDD methodology implemented in a Laravel Admin Panel, where the admin users can set the order of the gallery itens by dragging and dropping the itens to the desired position. A Vue.js component handles the drag and drop stuff. The changes are automatically persisted to the database and reflected in the frontend.

<!-- ![vue menu demo](https://github.com/daniel-cintra/vue-menu/blob/master/demo-screencast/menu-vue.gif) -->

## The tests

The tests can be found in `/tests/Feature` dir. There are two tests classes:

1. **GalleryOrderTest.php** tests for the backend code that allows an admin user to order the gallery itens as needed.

2. **GalleryTest.php** tests for the frontend `IndexController` that lists the gallery itens for the public access.

After the project setup, open your terminal, cd into your project path (where this repository was cloned) and run:

`./vendor/bin/phpunit`

## Project install instructions

First clone this repository:

`git clone https://github.com/daniel-cintra/tdd-laravel-example`

Install the required composer packages:

`composer install`

Install the required npm packages:

`npm install`

If needed, check the database configuration in your `.env` file. Setup and seed the database. If you are using Homestead, ssh into your vm and run:

`php artisan migrate:refresh --seed`

Just check in your database the email of the user created in the seed process, and use this email with the password `secret` to login in Adm Panel.

Logged in, drag and drop the gallery itens and open the site to see the ordered itens.
