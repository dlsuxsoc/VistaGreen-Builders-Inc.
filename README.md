# Instructions for setting up

### Dependencies
1. XAMPP (https://www.apachefriends.org/download.html)
2. XAMPP -> Applications -> Bitnami **WordPress** Module (https://bitnami.com/stack/wordpress/installer)
3. MySQL


### Instructions for setting up WordPress website
1. Download XAMPP
2. Download Bitnami WordPress module
3. Transfer this directory to the themes folder of the xampp wordpress 
(e.g. "C:\xampp\apps\wordpress\htdocs\wp-content\themes\PROJECT-FOLDER-NAME")
4. Import WordPress' pages/posts XML file if available through the site's "wp-admin -> tools" 
(e.g. "http://wordpress.local/wordpress/wp-admin/import.php")

NOTE:
- You might need to restart XAMPP
- You do not need to run MySQL in XAMPP


### Guidelines for the files:
- header   : Contains the "head" or the opening code snippet of the html/php 
- footer   : Contains the "foot" or the closing code snippet of the html/php
- index    : Landing page, but (each page) needs to be verified on the wp-admin 
- methods  : (Controller) Handles the post/get methods between the project & the database
- functions: Defining global variables and adding css/js for each html/php file
- style    : Contains the project description and bootstrap.min.css

* Creating a new html/php file would be similar to index.php but still needs to be added as a new page in the wp-admin
