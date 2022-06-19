<?php

include "inc/connection.php";
include "inc/truncate.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Content Generator</title>
</head>

<body>
    <!-- Bouton truncate -->
    <form action="inc/truncate.php" method="post">
        <button type="submit" name="truncate">Reset</button>
    </form>

    <!-- Champ input -->
    <form action="inc/input.php" method="post">
        <input type="number" name="input" min="0" required></input>
        <button type="submit" name="submit">Send</button>
    </form>
</body>

</html>