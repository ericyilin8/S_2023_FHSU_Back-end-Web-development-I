<?php
// phpinfo()

/* 
Bad Method of naming the variables
$42
$_
$this
*/

#Variables 
$name = "John Doe"; //String 
$age = 30; //Number 
$isStudent = true; //Boolean 
$height = 5.9; //Float 
$classes = ['back-end-1', 'FE-1', 'MW-1']; //Array
$greeting = "Hello ";
define('DAYS_IN_YEAR', 365);
$age++; //Increment 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php echo $name ?>
    <?php echo $classes[1] ?>
    <h1><?php echo $greeting . $name ?></h1>
    <?php echo "My name is " . $name . "<br>"; ?>

    <?php //Concatenation  
    $greeting .= "How are you {$name}";
    echo $greeting
    ?>

    <?php echo DAYS_IN_YEAR;
    echo "<br>" ?>
    <?php echo $age . nl2br("\n"); ?>
    <?php echo $age -= 10; ?>
    <?php echo $age *= 10; ?>


</body>

</html>