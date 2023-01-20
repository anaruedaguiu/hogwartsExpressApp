## Project name <h1 align="center">Hogwarts Express App 🎟️🚂</h1>

<div align="center"> 
  <img src="hogwartsExpress/public/images/darkLogo.png" width="300">
</div>

## Description
Design and develop a web application to manage ***Hogwarts Express*** routes online.

- About the App:
    
Users can watch the train routes' description, inscribe and unsubscribe themself. The Admin manage the app (CRUD).

On this project we use PHP Laravel to Create the CRUD, the User Management, Database Relationships and CRUD's Testing (TDD: Test-Driven Development).

## Participants
- [Veronika Komarova](https://github.com/VeronikaKoma) - SCRUM Master
- [EstherAma](https://github.com/EstherAma) - Product Owner
- [Ana Rueda Guiu](https://github.com/anaruedaguiu) - Developer
- [Alesia Baldeon Machuca](https://github.com/AlesiaCoder) - Developer
- [Paloma Babot](https://github.com/Uxoa) - Developer

## Screenshots
<h3 align="center">Sketch</h3>
<p align="center"> 
<img src="hogwartsExpress/public/images/sketchScreenshotFigma.png" width="700px">
</p>
 
<h3 align="center">Figma</h3>
<div align="center">
  <div class="d-flex flex-nowrap">
    <img src="hogwartsExpress/public/images/homViewScreenshotFigma.png" width="150">
    <img src="hogwartsExpress/public/images/cardsScreenshotFigma.png" width="150">
    <img src="hogwartsExpress/public/images/otherViewsScreenshotFigma.png" width="450">
  </div>
</div>

## Stacks 
<div align="center">
<a href="https://getbootstrap.com/docs/3.4/javascript/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/bootstrap-plain.svg" alt="Bootstrap" height="40" /></a>
<a href="https://www.w3schools.com/css/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/css3-original-wordmark.svg" alt="CSS3" height="40" /></a>
<a href="https://en.wikipedia.org/wiki/HTML5" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/html5-original-wordmark.svg" alt="HTML5" height="40" /></a>
<a href="https://laravel.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/laravel-plain-wordmark.svg" alt="Laravel" height="40" /></a>
<a href="https://www.mysql.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/mysql-original-wordmark.svg" alt="MySQL" height="40" /></a>
<a href="https://www.php.net/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/php-original.svg" alt="PHP" height="40" /></a>
<a href="https://sass-lang.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/sass-original.svg" alt="Sass" height="40" /></a>
<a href="https://www.figma.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/figma-icon.svg" alt="Figma" height="40" /></a>
<a href="https://www.apachefriends.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/xampp.png" alt="XAMPP" height="40" /></a>
<a href="https://github.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/git-scm-icon.svg" alt="Git" height="40" /></a>
</div>

* Frontend: HTML5, CSS3, SCSS, SASS.
* Backend: PHP Laravel, SQL, phpMyAdmin.
* Bootstrap 5


    Other tools:
    
- Project sketch and final design: Figma
- Visual Studio Code
- Trello
- DrawSQL
- Padlet
- Planning Poker
- Zoom

## Required 
* PHP 7.4 min
* Composer installed

## How to install the project 🪄: 
* Clone git https://github.com/anaruedaguiu/hogwartsExpressApp.git
* Composer install
* Install dependencies in a Visual Studio Code terminal:
  - Run ***npm install*** or ***npm update*** command
  - Run ***npm run dev*** command
* Run the server in a Visual Studio Code new terminal using:
  - ***php artisan serve*** command
* Create a local database on phpMyAdmin with - user : root, password : ""
* Database name: hogwartsexpress
* Run migration:
  - ***php artisan migration:fresh --seed*** command
  
⚠️ **IMPORTANT** ⚠️

The project is currently on the "dev" branch. After successfully installing the project, run ***git switch dev*** to view it.

## Tests
Uncomment the following code lines on **phpunit.xml** is needed before run the test:

      <server name="DB_CONNECTION" value="sqlite"/>
      <server name="DB_DATABASE" value=":memory:"/>

* php artisan test
* vendor/bin/phpunit OK (5 tests, 14 assertions)

## Methodology 
- AGILE with SCRUM
- Mob Programming
- Pair Programming

## Core skills
* MVC Design pattern.
* Git version control system.
* User stories and tasks implementation (Trello).
* Communication and self-evaluation.

## Next steps 
- Add a routes booked list for the user. 
- Restrict the inscribe function to one per user.
- Prevent a user from inscribed/booked in a route if there is no seats available.
- Show as unavailable a past event. 
- The user will receive a confirmation email after doing a reserve (the email will contain basic information about the booked route, such as date, time, origin, destination... and a confirmation about the book). 
- Improve the app adding views and link them on the different footer sections (news, offers...).
- Make changes on the frontend to improve the application logic based on the user experiences.
