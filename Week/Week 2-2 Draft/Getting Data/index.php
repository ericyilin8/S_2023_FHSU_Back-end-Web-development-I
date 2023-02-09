<?php
print_r($_GET);
print_r($_POST);
$firstName = htmlspecialchars($_GET['first']);
// The htmlspecialchars() function converts special characters to HTML entities. 
// This means that it will replace HTML characters like < and > with &lt; and &gt;. 
// This prevents attackers from exploiting the code by injecting HTML or Javascript code 
// (Cross-site Scripting attacks) in forms.
$lastName = $_GET['last'];
$email = $_GET['email'];

$firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);

echo $firstName;
echo $lastName;

// if (!empty($firstName) && !empty($lastName)) {
//     echo $firstName;
//     echo $lastName;
// } else {
//     echo "Please fill the names";
// }

if (isset($_GET['first']) && ($_GET['last'])) {
    $firstName = htmlspecialchars($_GET['first']);
    $lastName = htmlspecialchars($_GET['last']);
} else {
    echo "not set!";
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
    <form action="<?php echo $_SERVER['PHP_SELF']
                    //The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. 
                    ?> ">
        <label for="first">First Name:</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name:</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
            <button type="submit" formmethod="post">Submit using POST</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>

</html>