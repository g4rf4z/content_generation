<?php

include "connection.php";

$truncate_stmt = $mysqli->prepare("TRUNCATE TABLE students");
$truncate_stmt->execute();

if (isset($_POST["truncate"])) {
    $truncate_stmt;
    header("Location:../index.php");
}