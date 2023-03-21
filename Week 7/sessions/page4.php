<?php
session_start();

//To unset the session 
unset($_SESSION['name']);

//To Destroy the session 
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4 Sessions</title>
</head>

<body>
    <p>Page 4</p>
    <a href="page3.php">page 3</a>
</body>

</html>