<?php
$dbhost = "localhost";
$dbuser = "RBUSER"; // Replace with your database username
$dbpass = "123456"; // Replace with your database password
$dbname = "ecostore";

// Create connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Optional: Set character set to utf8 (if needed)
mysqli_set_charset($connection, "utf8");

?>

