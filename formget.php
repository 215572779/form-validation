<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms GET</title>
</head>
<body>
    <h1>Form GET</h1>
    <a href="form.html">Back to Form</a> <br />
    <?php 
        $name = $_GET["name"];
        $email = $_GET["email"];

        echo "Name: $name
         - Email: $email";
    ?>
</body>
</html>