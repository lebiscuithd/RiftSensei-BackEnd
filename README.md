# Rift Sensei
## description
Laravel backend project for Riftsensei App for serving endpoints API that will be consumed by a frontend app.
## installation
***

Create a database with PhPmyAdmin called 'riftsensei'
***

Run in your terminal :
```bash
cp .env.example .env
````
It will create your .env file

Then modify your .env with your mysql parameters

***

To abort CORS issues or unauthorized requests to your backend from your frontend app, set your frontend parameters at the end of your .env file :

```bash
SESSION_DOMAIN=localhost
SANCTUM_STATEFUL_DOMAINS=localhost:8080
````

there are the settings for a frontend app running on localhost port 8080
***

\
Install the project librairies/dependencies :

```bash
composer install
npm install
````
***
Run the laravel migration for creating our users table with --seed to seed our tables with random datas :
```bash
php artisan migrate --seed
````
***

To seed users table with our first admin user, run:

```bash
php artisan db:seed --class=UsersTableSeeder
````
It will create an admin user in our database called John Doe with email 'john@doe.com' and password 'password'.
***
\
Now let's serve the project

```bash 
npm run dev
php artisan serve
````

***

Our laravel project is now running with APIs endpoints that can be used by a separate frontend project. Do not forget to generate a laravel access key.



***

## Notice

This project is only for the backend of the app. 

We will only use Laravel to create APIs.


This project includes vuejs but we will not use this part for the final application. 


You don't really need to run npm commands because the frontend will be served separately.

You can find the frontend part, a vuejs cli project, here : https://github.com/xavierfrancoisepitech/Dream_Team
