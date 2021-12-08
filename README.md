# Forum - PHP Embedded

"Travel Earth" is a simple project developed personally in 2019 with the objective of starting to learn PHP and the use of JQuery library.

## Model

Since I was learning on my own, at that time, I thought it would be great the idea to develop the app in that way, using PHP embedded instead of an API REST using MVC, MySQLi instead of PDO and using SESSIONS instead of JWT.

Even though, I think it helped me to understand the goal of the language and the fantastic idea of dynamically change the web retrieving data from the database.

## Technologies

- PHP + MySQLi
- JQuery (JavaScript)
- HTML + CSS (Responsive)

## Features

- General
  - Logging system.
  - Email system to confirm the email on sign-up.
    - It's only available and functional on local and not on Internet since it's mandatory to set up the server to allow the send of emais.
  - It retrieves posts from database and show them dynamically.
  - You can filter posts by country.
  - You can write posts just in case you've been logged in.
  - Modern info panels to report errors, etc.

## Libraries

- PHPMailer- v6.2
- JQuery - v3.6.0
- Font Awesome

## Setup

- Create the database using the .sql file which is stored in the project.
- Access to the path "./src/web/php/form/conexion.php" and set your custom database options.
- Go to the path "./src/web/php/form/phpmailer.php" and set the email sender. \*\*IMPORTANT: That email which will send the data must allow the access of unknown applications (On Google Accounts).

## Resources

- All the project libraries (./src/web/lib/).
- .sql file with the whole database structrure (./db/).

## Authors

Linkedin: [http://linkedin.com/in/ivan-torres-garcia](http://linkedin.com/in/ivan-torres-garcia)
