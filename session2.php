<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session page 2</title>
</head>
<body>
    <h1>Session page 2</h1>

    <?php
    echo $_SESSION["favcolor"] . "<br />";
    ?>
</body>
</html>