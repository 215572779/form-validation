<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms POST</title>
</head>
<body>
    <h1>Form POST</h1>
    <a href="form.html">Back to Form</a> <br />
    <?php 
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "Name: $name - Email: $email";
    ?>
</body>
</html>