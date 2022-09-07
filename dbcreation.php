<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

// Create a db
$sql = "CREATE DATABASE dbContact";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if ($result) {
    echo "The db was created successfully!<br>";
} else {
    echo "The db was not created successfully because of this error ---> " . mysqli_error($conn) . "<br>";
}

$sql = "CREATE TABLE `dbContact`.`contactform` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `email` VARCHAR(20) NOT NULL ,`message` VARCHAR(120) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if ($result) {
    echo "The table was created successfully!<br>";
} else {
    echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
}
