# UTORA: Online Voting System

<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/images/utora_logo.png" width="400" alt="UTORA Logo"></p>

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/saveur1/votingsystem.git
composer install
cp .env.example .env
```

Then create the necessary database.

```
php artisan db
create database blog
```

And run the initial migrations and seeders.

```
php artisan migrate --seed
```

## About The Project

When it comes to democratic processes the traditional paper-based voting technique has always been fraught with problems. These can range from accessibility and security issues to human mistake. Acknowledging the need for a more efficient, safe, and open election process the suggestion for an updated voting system appears as an evolution that is required to strengthen democratic base upon which nations are constructed and that’s why we came up with the  idea of creating an online voting system(Utora), The project is mainly aimed at providing a secured and user friendly Online Voting System. The problem of voting is still critical in terms of safety and security. This system deals with the design and development of a web based voting system  to provide a high performance with high security to the voting system. The proposed Online Voting System allows the voters to register or if they already have an account to log in , and their credentials are then matched with an already saved login information , user id and password. The voting system is managed in a simpler way as all the users must login and click on his/her favorable candidates to cast the vote By using their ID and it provides enough security which reduces the dummy votes.

## Screenshots
These are are screenshots that shows fully running project in two users: Voters and Admin
### Landing Page
<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>