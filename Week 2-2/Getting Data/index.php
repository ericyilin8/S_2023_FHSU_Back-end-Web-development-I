<?php
print_r($_GET);
print_r($_POST);
// $firstName = htmlspecialchars($_GET['first']);
// $lastName = $_GET['last'];

// $firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);

// if (!empty($firstName) && !empty($lastName)) {
//     echo $firstName;
//     echo $lastName;
// } else {
//     echo "Please fill the first name & last name";
// }


if (isset($_POST['first']) && isset($_POST['last'])) {
    $firstName = htmlspecialchars($_POST['first']);
    $lastName = htmlspecialchars($_POST['last']);

    echo $firstName;
    echo $lastName;
} else {
    echo "first and last names are not set";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <h1>Web Processor</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="first">First Name:</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name:</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <div>
            <button type="submit">Get Data</button>
            <button type="submit" formmethod="post">Post Data</button>
        </div>
    </form>
</body>

</html>