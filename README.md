<p align="center">

##instalation
clone from https://github.com/ikhwnsyh/koltiva-test.git
run composer update just for make sure
run composer install
npm install
php artisan migrate
php artisan db:seed
npm run dev
php artisan serve or just use valley if installed
php artisan queue:work

## Technical Test Koltiva

1. Eloquent Relationships in Laravel
   Given three Eloquent models: User, Post, and Comment. The User model has many Posts, and each
   Post has many Comments. Implement an Eloquent relationship for these models, and write a query
   to retrieve all comments made by users with the name "Koltiva".

ANSWER => RUN /comments in browser. you can use http://127.0.0.1:8000/comments by php artisan serve or http://koltiva-test.test if you have valley on your device.

2. Jobs & Queues Laravel
   Implement a service in Laravel that will run asynchronously to send a confirmation email after a user
   successfully registers. Make sure this job is put in the queue.

3. Create Unit Test for the jobs & queue above
   Implement a Unit Test in Laravel for jobs on question no 2
