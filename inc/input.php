<?php

include "connection.php";

// Get value from input
if (($_POST["input"]) != 0) {
    $int = intval($_POST["input"]); // Convert string to integer   
    for ($i = 0; $i < $int; $i++) {
        // Get random school

        // Get random sport

        // Get random student
        $selectData = "SELECT data_firstname, data_lastname FROM students_data ORDER BY RAND()";
        $result = $mysqli->query($selectData);
        while ($row = $result->fetch_array()) {
            $dataRow["firstname"] = $row["data_firstname"];
            $dataRow["lastname"] = $row["data_lastname"];
        }
        $mysqli->query("INSERT INTO students (student_firstname, student_lastname) VALUES ('" . $dataRow["firstname"] . "', '" . $dataRow["lastname"] . "')");
    }
}
header("Location:../index.php");