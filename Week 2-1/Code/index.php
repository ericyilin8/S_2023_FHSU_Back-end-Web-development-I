<?php
// phpinfo() 

/* 
Bad Methods to name the variables 
$42
$_
*/

#Variables 
$name = "John Doe"; //String 
$age = 30; // Number 
$isStudent = true; //Boolean
$height = 5.9; //Float
$classes = ["Be1", "fw1", "mobile1"]; //Array
$greeting = "Hello ";
define("DAYS_IN_YEAR", 365)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2-1</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- To Print the Variables -->
    <?php echo $name ?>
    <?php echo $classes[1] ?>
    <!-- Concatenations -->
    <h1><?php echo $greeting . $name  ?></h1>
    <h1><?php echo "My name is" . $name . "<br>"; ?></h1>
    <?php $greeting .= "How are you {$name}";
    echo $greeting;
    ?>

    <!-- Line Breaks -->
    <?php echo DAYS_IN_YEAR;
    echo "<br>" ?>

    <?php
    echo $age . nl2br("\n");
    ?>

    <!-- Arithmetic Operators -->
    <?php echo $age -= 10 ?>
    <?php echo $age *= 10 ?>
    <?php echo $age ?>

</body>

</html>