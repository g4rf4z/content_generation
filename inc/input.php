<?php

include "connection.php";


if (!empty($_POST["input"]) && 0 < $_POST["input"]) { // Si input n'est pas vide et est supérieur à 0


    $input_value = intval($_POST["input"]); // "$_POST["input"]" est converti en integer et est attribué à la variable "$input_value"


    for ($i = 0; $i < $input_value; $i++) {


        // Sélection d'un ou plusieurs élève(s) aléatoire(s)
        $get_names_stmt = $mysqli->prepare("SELECT data_firstname, data_lastname FROM data ORDER BY RAND (?) LIMIT 1");
        $get_names_stmt->bind_param('i', $input_value); // ("i" = integer, "$input_value" = valeur de l'entrée) La valeur de l'entrée est un integer
        $get_names_stmt->execute();
        $get_names_stmt->bind_result($firstname, $lastname); // Les résulats sont assignés aux variables $firstname et $lastname
        $get_names_stmt->store_result();


        // Insertion d'un ou plusieurs élève(s) aléatoire(s)
        $insert_names_stmt = $mysqli->prepare("INSERT INTO students (student_firstname, student_lastname) VALUES (?, ?)");
        $insert_names_stmt->bind_param("ss", $firstname, $lastname); // ("ss" = 2 string, "$firstname" = data_firstname, "$lastname" = data_lastname) Les deux variables sont des strings

        while ($get_names_stmt->fetch()) {
            $insert_names_stmt->execute();
        }
    }
}
header("Location:../index.php");