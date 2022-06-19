<?php

include "connection.php";

// get value from input
if (($_POST["input"]) != 0) {
    echo "You generated " . ($_POST["input"]) . " new students !";
    $int = intval($_POST["input"]); //transforme string ou boolean en int    
    for ($i = 0; $i < $int; $i++) {
        // get random school

        // creer new while pour chaque bloc, réutiliser $dataRow

        // get random sport

        // get random student
        $selectData = "SELECT data_firstname, data_lastname FROM data ORDER BY RAND()";
        $result = $mysqli->query($selectData);
        while ($row = $result->fetch_array()) {
            $dataRow["firstname"] = $row["data_firstname"];
            $dataRow["lastname"] = $row["data_lastname"];
        }
        $mysqli->query("INSERT INTO students (student_firstname, student_lastname) VALUES ('" . $dataRow["firstname"] . "', '" . $dataRow["lastname"] . "')");
    }
} else {
    echo "Psss, try with a number greater than " . ($_POST["input"] . ".");
}
header("Location:../index.php");

// convert string to integer
$int = intval($_POST["input"]);