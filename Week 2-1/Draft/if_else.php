<?php $mode = "dark" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body <?php if ($mode = "dark") : ?> class="dark" <?php endif ?>>
    <?php
    #Variables 
    $name = "John Doe"; //String 
    $age = 30; //Number 
    $isStudent = true; //Boolean 
    $height = 5.9; //Float 
    ?>

    <?php
    $x = 345;
    echo var_dump($x); ?>

    <!-- Equal, Not Equal, Strict Equal, Strict Not Equal  -->

    <h1><?php
        if ($name === "John Doe") {
            echo "Equal";
        } else {
            echo "Not Equal";
        }
        ?></h1>

    <h1><?php if ($name === "John Doe") { ?>
            Equal
        <?php } else { ?>
            Not Equal
        <?php } ?>
    </h1>


    <h1><?php /* gettype */
        if (gettype($age) == "integer") {
            echo "true";
        } else {
            echo "false";
        }
        ?></h1>

    <h1><?php /* is_numeric */
        if (is_numeric($age) == "integer") {
            echo "true";
        } else {
            echo "false";
        }
        ?></h1>

    <?php $amount = "One" ?>
    <h1><?php /* if_else */
        if (empty($amount)) {
            $message = "Amount is required";
        } else if (!is_numeric($amount)) {
            $message = "Amount must be numeric";
        } else if ($amount < 0) {
            $message = "Amount must be grater than Zero";
        } else {
            $message = "Valid Amount";
        }
        ?>
        <?php echo $message ?>
    </h1>

    <h1><?php /* if_else */
        if (empty($amount) || !is_numeric($amount) || ($amount < 0)) {
            $message = "Amount is not Valid";
        } else {
            $message = "Valid Amount";
        }
        ?>
        <?php echo $message ?>
    </h1>

</body>

</html>