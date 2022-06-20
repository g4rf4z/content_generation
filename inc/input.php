<?php

include "connection.php";

// Get value from input
if (($_POST["input"]) != 0) {
    $int = intval($_POST["input"]); // Convert string to integer   
    for ($i = 0; $i < $int; $i++) {

        // Get random school
        $get_random_school = "SELECT school_id FROM schools ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($get_random_school);

        while ($row = $result->fetch_array()) {
            $dataRow["school_id"] = $row["school_id"];
        }

        // Get random sport
        $get_random_sport = "SELECT sport_id FROM sports ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($get_random_sport);

        while ($row = $result->fetch_array()) {
            $dataRow["sport_id"] = intval($row["sport_id"]);
        }

        // Get random student
        $get_random_student = "SELECT data_firstname, data_lastname FROM students_data ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($get_random_student);

        while ($row = $result->fetch_array()) {
            $dataRow["firstname"] = $row["data_firstname"];
            $dataRow["lastname"] = $row["data_lastname"];
        }
        $mysqli->query("INSERT INTO students (student_firstname, student_lastname, school_id, sport_id) VALUES ('" . $dataRow["firstname"] . "', '" . $dataRow["lastname"] . "', '" . $dataRow["school_id"] . "', '" . $dataRow["sport_id"] . "')");
    }
}
header("Location:../index.php");

// définir si un eleve fait un sport ou non
// if pas de sport, 
// if sport, combien de sport
// quel sport (if ou switch)