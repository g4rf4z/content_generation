<?php

// truncate table
function truncate()
{
    include "connection.php";
    $truncate = $mysqli->query("TRUNCATE TABLE students");
}

if (isset($_POST["truncate"])) {
    truncate();
    header("Location:../index.php");
}