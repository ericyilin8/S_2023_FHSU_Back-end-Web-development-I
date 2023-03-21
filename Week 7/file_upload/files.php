<?php

/******

§ FILES[* formfield' ]
['name'] - use basename ( ) on this
['type']
['size']
['error']
['tmp name']

move uploaded file ()
is_uploaded file()

enctype="multipart/form-data

//instead of $ FILES[' formfield ]['type' ]
$finfo = new finfo (FILEINFO MIME);
$filename = "./avatar.png"
echo $finfo->file ($filename)

ERROR VALUES

0 UPLOAD ERR OK
1 UPLOAD ERR INI SIZE exceeds upload max filesize php.ini
2 UPLOAD ERR FORM SIZE exceeds MAX FILE SIZE
3 UPLOAD ERR PARTIAL 
4 UPLOAD ERR NO FILE
6 UPLOAD ERR NO TMP DIR
7 UPLOAD ERR CANT WRITE
8 UPLOAD ERR EXTENSION
 ******/

echo $_FILES['pic']['tmp_name'];

if (isset($_FILES['pic'])) {
    if ($_FILES['pic']['error'] == 0) {
        $dir = './';
        $filename = strval(time()) . ".jpg";
        $newFile = $dir . "/" . $filename;
        if (move_uploaded_file($_FILES['pic']['tmp_name'], $newFile)) {
            echo $_FILES['pic']['name'] . ' was uploaded and saved as ' . $filename . '</br>';
        };
    } else {
        //Error to user - file error
    }
} else {
    //error msg to user 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file upload</title>
</head>

<body>
    <h1>PHP File upload</h1>
    <form action="files.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="pic">Image</label>
            <input type="file" name="pic">
        </p>
        <p>
            <input type="submit" value="upload">
        </p>
    </form>
</body>

</html>