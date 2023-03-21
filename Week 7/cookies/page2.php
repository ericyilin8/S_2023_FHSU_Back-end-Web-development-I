<?php
//OverWrite the cookie 
setcookie('username', 'Sam Smith', time() + (8600 * 3));

//Delete the cookie 
setcookie('username', 'Sam Smith', time() - 3600);

if (isset($_COOKIE['username'])) {
    echo 'username ' . $_COOKIE['username'] . 'is set';
} else {
    echo 'Username not set';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 cookies </title>
</head>

<body>

</body>

</html>