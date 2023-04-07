# Mini-PHP-Import-Display
A basic mini PHP project that allows users to upload and view CSV data stored in a mySQL database using Laravel framework.

Getting started/Cloning Repo After Laravel has been installed and when a fresh clone has been done, carry out these steps:

- Navigate to repo in terminal
- Run composer install
- Change .env.example to .env
- Alter database name/credentials
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan serve
When importing data, please download and use the "testData" CSV in this repo.

The database system used was a local WAMP/PhpMyAdmin server. By running php artisan migrate creates the necessary tables as long as the server is running and database credentials set within the .env config file.

That should be eveything needed to start using the app. Enjoy!

Please note that this project has been built for Laravel learning purposes.
