<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include & Require</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php // require('./view/header.php') //defiantly needed the code won't execute without the file 
    ?>
    <?php // include_once('./view/header.php') //U can include once 
    ?>
    <?php include('./view/altheader.php')
    ?>
    <?php // include('./view/header.php') 
    ?>
    <main>
        <h1>This is main content</h1>
    </main>
    <?php include('./view/footer.php') ?>
</body>

</html>