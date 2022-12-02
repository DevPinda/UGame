# CS2TP27 - 'UGame?' Project

<br>

<p align="center">
<img width="800" height="200" src="https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/images/UGAME%20logo%20(white).png">
</p>

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

### <h3>Tyler Gilkes</h3>

- Designed the user interface of the website (multiple webpages) using Affinity Designer before implementation.
- Designed the web graphics of the website.
- Designed the ‘UGAME?’ logo using Affinity Designer.
- Developed and built the entire user interface with web technologies: HTML, CSS and Javascript:
- Responsible for all HTML and pages on the front-end ([nintendo.blade.php](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/nintendo.blade.php), [xbox.blade.php](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/xbox.blade.php), [playstation.blade.php](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/playstation.blade.php), [index.blade.php](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/index.blade.php), [about.blade.php](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/about.blade.php) (managed), [contact.blade.php](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/contact.blade.php) (managed) and the basket window) 
- Responsible for all CSS and styling on the front-end ([style.css](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/css/style.css))
- Responsible for all Javascript on the front-end ([search.js](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/js/search.js), [script.js](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/js/script.js), [filter.js](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/js/filter.js) and embedded Javascript into ‘blade.php’ files)
- Developed live search bar functionality ([search.js](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/js/search.js))
- Developed basket functionality ([script.js](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/js/search.js)), the ability to add products to the basket; users can close and open their basket at any time and remove items from the basket. The basket window also displays the current number of items, the current total price, a table of chosen items and the checkout button.
- Developed filtered search functionality ([filter.js](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/public/js/filter.js)), users can filter through all game products by their attributes; genre, price range, age rating and platform.

### <h3>Shingai Mutumbi</h3>

- Developed the migrations of the required major database tables: [Products](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/Shingai/ugame-laravel-backend/database/migrations/2022_11_12_145144_create__insert_details_table.php), [Order](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/Shingai/ugame-laravel-backend/database/migrations/2022_11_12_145144_create__order_details_table%20-%20Copy.php) and [Customer](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/Shingai/ugame-laravel-backend/database/migrations/2022_11_16_115019_create_tablesinsert_table.php).
- Developed the [about.blade.page](https://github.com/DevPinda/CS2TP-Group-27-Project-1/blob/main/ugame-laravel-backend/resources/views/about.blade.php).

### <h3>Keshav Parikh</h3>

- Developed the Order processing (Checkout page)
- CSS for Admin Page
- Debugging (HTML,CSS,PHP)

### <h3>Jahray Facey</h3>

- Obtained The Information for the products
- Assisted with Database
- Designed UI elements

### <h3>Victory Mpokosa</h3>
- Worked on all the database tables within the migration (including creating the models): https://github.com/DevPinda/CS2TP-Group-27-Project-1/tree/main/ugame-laravel-backend/database 
- Created and completed the Admin page and all relevent backend connection associated with this page. 
- Aided in the backend and database requirements for the main index, playstation, xbox, nintendo pages 
- wrote code for inputting all the required and in-use controllers 
- Deployed the website to a web server 

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

The command below will start the server on the local connection with the usual URL of: ```http://127.0.0.1@8000```

- Run ```php artisan serve```
