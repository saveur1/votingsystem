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
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Landing%20Page.png" width="400" alt="Landing Page Screenshoot"></p>
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Login.png" width="400" alt="Landing Page Screenshoot"></p>
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Signup.png" width="400" alt="Landing Page Screenshoot"></p>

### Voters
#### Profile
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Landing%20Page.png" width="400" alt="Voter Profile Screenshoot"></p>

#### Elections
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Landing%20Page.png" width="400" alt="Elections History Screenshoot"></p>

#### Voting Panel
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/VotingPanel.png" width="400" alt="Voting Panel Screenshoot"></p>
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Voting%20Page.png" width="400" alt="Voting Panel Screenshoot"></p>
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/SuccesfullyVoted.png" width="400" alt="Successfully Voted Screenshoot"></p>

### Admin
#### Dashboard
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/dashboard.png" width="400" alt="Dashboard Screenshoot"></p>

#### Candidates
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Candidates%20Dashboard.png" width="400" alt="Candidate Page Screenshoot"></p>

<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/Edit_Candidates.png" width="400" alt="Voting Panel Screenshoot"></p>
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/DeleteUser.png" width="400" alt="Voting Panel Screenshoot"></p>
<p align="center"><img src="https://github.com/saveur1/votingsystem/blob/main/public/screenshoots/ViewUser.png" width="400" alt="Voting Panel Screenshoot"></p>

## Conclusion
Online Voting Systems have many advantages over the traditional voting system. Some of these advantages are less cost, faster generation results, easy accessibility, accuracy, and low risk of human and mechanical errors. It is very difficult to develop online voting system which can allow security and privacy on the high level. As technology continues to advance, embracing online voting can be a progressive step towards fostering a modern and inclusive democracy that truly reflects the diverse voices of the electorate.