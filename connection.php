<?php

$servername = "localhost"; 
$username   = "root";
$password   = "";
$dbname     = "Online_Shoping";

$conn = new mysqli($servername, $username, $password, $dbname);
// conn.connect_error // True , Fasle , 0 , null
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}




/*
Database Schema:

Online_Shoping

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_url VARCHAR(350) DEFAULT NULL
);

*/


?>
