# Repository Archived

This repository has been archived and is no longer maintained.

## An example of TDD with Laravel Framework

I'm switching to TDD (Test Driven Development) in my daily work. It's been a nice experience, and I'm really enjoying the TDD approach: developing in the Red, Green, Refactory cicle.

This repository, is a little example of TDD methodology implemented in a Laravel Admin Panel, where the admin users can set the order of the gallery itens by dragging and dropping the itens to the desired position. A Vue.js component handles the drag and drop stuff. The changes are automatically persisted to the database and reflected in the frontend.

![laravel tdd demo](https://github.com/daniel-cintra/tdd-laravel-example/blob/master/demo-screencast/tdd-laravel.gif)

## The tests

The tests can be found in `/tests/Feature` dir. There are two tests classes:

1. **GalleryOrderTest.php** tests for the backend code that allows an admin user to order the gallery itens as needed.

2. **GalleryTest.php** tests for the frontend `IndexController` that lists the gallery itens for the public access.

After the project setup, open your terminal, cd into your project path (where this repository was cloned) and run:

`./vendor/bin/phpunit`

## Demo

There's a [working example here](https://tdd-laravel-example.danielcintra.site/). 

You can use these credentials to login in Admin Panel:

**Email:** tester@gmail.com

**Pass:** secret

**Note:** If two users makes changes to the itens order at the same time, the last change will be persisted...

## Project install instructions

First clone this repository:

`git clone https://github.com/daniel-cintra/tdd-laravel-example`

Install the required composer packages:

`composer install`

Install the required npm packages:

`npm install`

Rename the `.env.example` (in your project root dir) file to `.env`. 

Generate the application encryption key:

`php artisan key:generate`

### Database

Open the `.env` file in your code editor and set the database values as needed, example:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tdd
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Now, setup and seed the database, if you are using Homestead, **ssh into your VM** (by running `vagrant ssh` in your project root dir) and run:

`php artisan migrate:refresh --seed`

### Map a "domain" to your project

Option 1: Now you must map a "domain" (like tdd-laravel.test) to your project folder. If you use [Laravel Homestead](https://laravel.com/docs/5.6/homestead) just follow [these steps](https://laravel.com/docs/5.6/homestead#adding-additional-sites).

Option 2: From Laravel Docs: "If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000":

Run `php artisan serve` from your project root dir.

### Auth Credentials

You have one user created in `users` table, and six itens in `galleries` table.

Just check in your database the email of the user created in the seed process, and use this email with the password `secret` to login in Admin Panel.

Logged in, drag and drop the gallery itens and open the site to see the ordered itens.
