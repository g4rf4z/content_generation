<?php

include "connection.php";

// Truncate table
if (isset($_POST["truncate"])) {

    $truncate = ("TRUNCATE TABLE students");
    $result = $mysqli->query($truncate);
    $mysqli->query($truncate);
}
header("Location:../index.php");