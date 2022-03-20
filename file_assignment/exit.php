<?php
if (isset($_POST['username'])) {
    $username = $_POST["username"];

    $openFile = fopen("$username.txt",'a');
    $data = "";
    $data = "\t".date_default_timezone_set("Asia/Kathmandu").date(' H:i:s');

    fwrite($openFile,$data);
    fclose($openFile);
    $filename = "$username.txt";
    if (is_file($filename)) {
        $message = "The file $filename exists";
    } else {
        $message = "The file $filename does not exist";
    }
    echo $message;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exit Page</title>
</head>
<body>
<form action="" method="post">
    <h3>Do you want to Exit? </h3> <br>
    <label for="name"> Please Enter Name:</label>
    <input type="text" name="username" placeholder="Enter username:"> <br> <br>
    <button type="submit" >Exit</button>
</form>
</body>
</html>