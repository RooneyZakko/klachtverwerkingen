<?php 

require '../vendor/autoload.php';

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klacht Verwerking</title>
    <style>
        *{
            text-align:center;
        }
        h2{
            color:green;
        }
    </style>
</head>
<body>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $omschrijving = $_POST['omschrijving'];

            echo "<h2>Uw klacht is in behandeling</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";;
        } else {
            echo "<p>Er is fout gegaan.</p>";
        }
    }
    ?>
</body>
</html>
