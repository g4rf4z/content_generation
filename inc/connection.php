<?php

// Set variables
$servername = "localhost";
$username = "root";
$password = "";
$database = "content_generation";

// Create mysqli connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failure: " . mysqli_connect_errno();
    exit();
}