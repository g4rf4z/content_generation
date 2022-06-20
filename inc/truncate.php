<?php

include "connection.php";


// Truncate prepared statement
if (isset($_POST["truncate"])) {

    $truncate_stmt = $mysqli->prepare("TRUNCATE TABLE students");
    $truncate_stmt->execute();
    header("Location:../index.php");
}