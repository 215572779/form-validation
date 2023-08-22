<?php
$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";
if(isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $NameError = "Name is required";
    } else {
        $Name = $_POST["name"];
        if (!preg_match("/^[A-Za-z]*$/", $Name)) {
            $NameError = "Only letters and white space allowed.";
        }
    }
    if (empty($_POST["email"])) {
        $EmailError = "Email is required";
    } else {
        $Email = $_POST["email"];
        if (!preg_match("/^\\S+@\\S+\\.\\S+$/", $Email)) {
            $EmailError = "Email is invalid.";
        }
    }
    if (empty($_POST["gender"])) {
        $GenderError = "Gender is required";
    }
    if (empty($_POST["website"])) {
        $WebsiteError = "Website is required";
    } else {
        $Website = $_POST["website"];
        if (!preg_match("/^https?:\\/\\/(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)$/", $Website)) {
            $WebsiteError = "URL is invalid.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
        <style>
            .error {color: red;}
        </style>
    <title>Forms</title>
</head>
<body>
    <h1>Form</h1>
    <form action="formvalidation.php" method="post">
        <fieldset>
            <legend>Student Form</legend>
            <p>
                <label for="name">Name: </label>
                <input name="name" id="name" type="text" placeholder="Your name" /> * <?php echo "<span class='error'>$NameError</span>" ?>
            </p>
            <p>
                <label for="email">Email: </label>
                <input name="email" id="email" type="email" placeholder="test@email.com" /> * <?php echo "<span class='error'>$EmailError</span>" ?>
            </p>
            <p>
                <label for="gender">Gender: </label>
                <input name="gender" id="gender" type="radio" value="Male" /> Male
                <input name="gender" id="gender" type="radio" value="Female" /> Female * <?php echo "<span class='error'>$GenderError</span>" ?>
            </p>
            <p>
                <label for="website">Website: </label>
                <input name="website" id="website" placeholder="http://yourwebsite.com" /> * <?php echo "<span class='error'>$WebsiteError</span>" ?>
            </p>
        </fieldset>
        <p>
            <input type="submit" name="submit" value="submit"/>  
            <input type="reset" />
        </p>
    </form>

</body>
</html>