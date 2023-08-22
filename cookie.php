<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookie</h1>

    <?php
    $cookie_name = "user";
    $cookie_value = "John";
    setcookie($cookie_name, $cookie_value, time() + (86400 *30), "/");

    if (isset($_COOKIE[$cookie_name])) {
        echo "Welcome ".$_COOKIE[$cookie_name] . "<br />";
    } else {
        echo "Welcome Guest. <br />";
    }
    ?>
</body>
</html>