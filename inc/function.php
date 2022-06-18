<?php

// Truncate table
function truncate(){
    include "connection.php";
    $truncate = $mysqli->query("TRUNCATE TABLE students");
}

if (isset($_POST["truncate"])) {
    truncate();
    header("location:../index.php");
}

// Generate random data
function generateData() {
    include "connection.php";
    $generateData = $mysqli->query("SELECT firstname_db, lastname_db FROM students_db ORDER BY RAND() LIMIT 1");
    while ($row = $generateData->fetch_array()) {
        $student["firstname"] = $row["firstname_db"];
        $student["lastname"] = $row["lastname_db"];
    }
    return $student;
}

// Insert random data
function insertData() {
    include "connection.php";
    $student = generateData();
    $mysqli->query ("INSERT INTO students (student_firstname, student_lastname) VALUES ('" . $student["firstname"] . "', '" . $student["lastname"] . "')");
}

if (isset($_POST["insert"])) {
    insertData();
    header("location:../index.php");
}