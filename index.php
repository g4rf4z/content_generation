<?php

include_once "inc/function.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Content Generator</title>
</head>
<body>
    <form action="inc/function.php" method="post">
        <button type="submit" name="truncate" value="true">Reset</button>
    </form>

    <form action="inc/function.php" method="post">
        <button type="submit" name="insert" value="true">Insert</button>
    </form>
</body>
</html>