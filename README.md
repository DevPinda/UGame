# CS2TP-Group-27-Project-1

## Description

Repository containing source code for my University Team Project regarding a Full-Stack Website encompassing HTML, CSS, JS, Laravel (PHP) and SQL files.

<b>We will commit all code to the main branch of this repository, all commit history will be viewable on the repository, including names and description of commits.</b>

The following repository will include source code consisting of the following languages, including Blade (HTML), CSS, JavaScript, Laravel Framework (PHP) and SQL.

## Table of Contents
- [Contributors](#contributors)
- [Detailed Contributions](#detailed-contributions)
- [Pre-Requisites](#pre-requisites)
    - [Git](#--git-bash-httpsgit-scmcomdownloads)
    - [Composer](#--composer-httpsgetcomposerorg)
    - [XAMPP](#--xampp-httpswwwapachefriendsorgdownloadhtml)
        - [Notes](#notes)
- [Installation](#installation)

## Contributors

1. DevPinda (Parminder Singh)
2. SedulousFlame (Tyler Gilkes)
3. Kesh0707 (Keshav Parikh)
4. Victorymp (Victory Mpokosa)
5. JahrayFacey (Jahray Facey)
6. AR127 (Awais Riaz)
7. Shinga1 (Shingai Mutumbi)
8. Shaharyar05-beep (Muhammad Shaharyar Hussain Shigry)

## Detailed Contributions

Below we have added the names of the contributors including the features they have added towards the completion of the project.

### <h3>Parminder Singh</h3>

- Created and Named Laravel Project.
- Installed, verified and updated the compatibility of Laravel Dependencies: [composer, node.js, npm](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/composer.json).
- Completed [PageController](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/app/Http/Controllers/PageController.php) and [Web Routing](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/routes/web.php) in order to display the corresponding Blade PHP files upon entering the matching URL path.
- Completed [ProductsController](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/app/Http/Controllers/ProductsController.php) and the relevant [routing](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/routes/web.php) to display the products from the mySQL database to [parsing the Array of Products in the front-end](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/index.blade.php#L79-L90).
- Installed and Setup Laravel Jetstream, LiveWire and other relevant dependencies for the Register and Login functionalities.
- Created and Formatted the [README.md](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/README.md) file.

## Pre-Requisites

### - Git Bash: https://git-scm.com/downloads

### - Composer: https://getcomposer.org

### - XAMPP: https://www.apachefriends.org/download.html

#### Notes:

- <b>Make sure PHP is on the PATH inside the Environment Variables.</b>
- <b>Make sure to run XAMPP with Administrator Privileges.</b>

## Installation

Below we have written a step-by-step list of instructions in order to download the source code, install dependencies and setup the project.

### 1. Open the folder with the directory below:

- On Windows: ```C:\xampp\htdocs``` (Pre-requisite XAMPP is necessary)

### 2. Clone the repository to your local machine using Git (Pre-requisite Git is necessary)

Run the command below using <b>Git Bash CLI</b>:

- Run:  ```git clone https://github.com/DevPinda/CS2TP-Group-27-Project-1.git```

### 3. Install dependencies (necessary)

Run the command below to install all the needed dependencies that are essential for the functioning of the Laravel project in the same Git Bash CLI window:

- Run: ```composer install```
- Run: ```composer update```  <b>(optional)</b>

### 4. Copy .env.example file contents to .env (situational)

- On <b>Windows</b> OS run: ```copy .env.example .env```

- On <b>Linux</b> OS run: ```cp .env.example .env```

### 5. Generate Key (necessary)

To generate the key for the Laravel project run the command below:

- Run: ```php artisan key:generate```

### 6. Generate Database Tables from Migrations (necessary)

The comnmand below will generate the pre-coded tables for the database:

- Run: ```php artisan migrate```

### 7.  Run PHP server

The command below will start the server on the local connection with the usual URL of ```http://127.0.0.1@8000```:

- Run ```php artisan serve```
