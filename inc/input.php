<?php session_start();

include "connection.php";

// Input
if (($_POST["input"]) != 0) {
    $int = intval($_POST["input"]);
    for ($i = 0; $i < $int; $i++) {

        // Générer une école aléatoire
        $get_random_school = "SELECT school_id FROM schools ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($get_random_school);

        while ($row = $result->fetch_array()) {
            $data_row["school_id"] = $row["school_id"];
        }

        // Générer un sport aléatoire
        $get_random_sport = "SELECT sport_id FROM sports ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($get_random_sport);

        while ($row = $result->fetch_array()) {
            $data_row["sport_id"] = ($row["sport_id"]);
        }

        // Générer un élève aléatoire
        $get_random_student = "SELECT data_firstname, data_lastname FROM students_data ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($get_random_student);

        while ($row = $result->fetch_array()) {
            $data_row["firstname"] = $row["data_firstname"];
            $data_row["lastname"] = $row["data_lastname"];
        }
        $mysqli->query("INSERT INTO students (student_firstname, student_lastname, school_id, sport_id) VALUES ('" . $data_row["firstname"] . "', '" . $data_row["lastname"] . "', '" . $data_row["school_id"] . "', '" . $data_row["sport_id"] . "')");

        // Compter les élèves de l'école A

        $count_student_from_school_a = "SELECT COUNT(student_id) as number_of_students_from_school_a FROM students WHERE school_id = 1";
        $result = $mysqli->query($count_student_from_school_a);

        while ($row = $result->fetch_array()) {
            $data_row["number_of_students_from_school_a"] = ($row["number_of_students_from_school_a"]);
            $_SESSION["number_of_students_from_school_a"] = $data_row["number_of_students_from_school_a"];
        }

        // Compter les élèves de l'école B
        $count_student_from_school_b = "SELECT COUNT(student_id) as number_of_students_from_school_b  FROM students WHERE school_id = 2";
        $result = $mysqli->query($count_student_from_school_b);

        while ($row = $result->fetch_array()) {
            $data_row["number_of_students_from_school_b"] = ($row["number_of_students_from_school_b"]);
            $_SESSION["number_of_students_from_school_b"] = $data_row["number_of_students_from_school_b"];
        }

        // Compter les élèves de l'école C
        $count_student_from_school_c = "SELECT COUNT(student_id) as number_of_students_from_school_c  FROM students WHERE school_id = 3";
        $result = $mysqli->query($count_student_from_school_c);

        while ($row = $result->fetch_array()) {
            $data_row["number_of_students_from_school_c"] = ($row["number_of_students_from_school_c"]);
            $_SESSION["number_of_students_from_school_c"] = $data_row["number_of_students_from_school_c"];
        }
    }
}
header("Location:../index.php");

// définir si un eleve fait un sport ou non
// if pas de sport, 
// if sport, combien de sport
// quel sport (if ou switch)
// insert sport