<?php
    //Database params
    define('DB_HOST', 'localhost'); //Add your db host
    define('DB_USER', 'root'); // Add your DB root
    define('DB_PASS', ''); //Add your DB pass
    define('DB_NAME', 'iwop'); //Add your DB Name


    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));

    //URLROOT (Dynamic links)
    define('URLROOT', 'http://localhost/iWoP-git');

    //Sitename
    define('SITENAME', 'iWoP');


 ?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>
