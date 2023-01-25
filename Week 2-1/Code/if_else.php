<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php
    #Variables 
    $name = "John Doe"; //String 
    $age = 30; // Number 
    $isStudent = true; //Boolean
    $height = 5.9; //Float
    $classes = ["Be1", "fw1", "mobile1"]; //Array
    ?>

    <!-- Equal, Not Equal, Strict Equal, Strict Not Equal  -->

    <?php
    if ($name === "John Doe") {
        echo "Equal";
    } else {
        echo "Not Equal";
    }
    ?>

    <?php
    if ($name === "John Doe") { ?>
        Equal
    <?php } else { ?>
        Not Equal
    <?php   }    ?>

    <?php #gettype
    if (gettype($name) == "integer") {
        echo "true";
    } else {
        echo "false";
    }
    ?>

    <?php #gettype
    if (is_numeric($age) == "integer") {
        echo "true";
    } else {
        echo "false";
    }
    ?>


    <?php $amount = 30 ?>
    <?php #if_else multiple
    if (empty($amount)) {
        $message = "Amount is Required";
    } else if (!is_numeric($amount)) {
        $message = "Amount must be a numeric value";
    } else if (($amount < 0)) {
        $message = "Amount must be a grater than Zero";
    } else {
        $message = "Valid Amount";
    }
    ?>
    <?php echo $message ?>


    <?php #if_else multiple
    if (empty($amount) || !is_numeric($amount) || ($amount < 0)) {
        $message = "Amount is not valid";
    } else {
        $message = "Valid Amount";
    }
    ?>
    <?php echo $message ?>
</body>

</html>