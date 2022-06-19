<?php

include_once "inc/truncate.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Content Generator</title>
</head>

<body>
    <!-- Reset -->
    <form action="inc/truncate.php" method="post">
        <button type="submit" name="truncate">Truncate</button>
    </form>

    <form action="inc/input.php" method="post">
        <input type="number" name="input" min="0" required></input>
        <button type="submit" name="submit">Send</button>
    </form>
</body>

</html>