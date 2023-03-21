<?php
session_start();

// $_SESSION['name'] = 'Sam Smith';

// $name = $_SESSION['name'];
// $email = $_SESSION['email'];

$name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "Guest@gmail.com";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3 Sessions</title>
</head>

<body>
    <h1>hello I'm <?= $name ?> and my email is <?= $email ?></h1>
    <a href="page2.php">page 2</a>
    <a href="page4.php">page 4</a>
</body>

</html>