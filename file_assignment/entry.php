<?php
if (isset($_POST['username'])) {
    $username = $_POST["username"];
    $contact = $_POST["contact"];

    $openFile = fopen("$username.txt",'a');
    $data = "{$username}";
    $data .= "\t"."{$contact}";
    $data .= "\t".date_default_timezone_set("Asia/Kathmandu").date(' H:i:s');


    fwrite($openFile,$data);
    fclose($openFile);

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entry Page</title>
</head>
<body>
<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="username" placeholder="Enter Name:"> <br> <br>
    <label for="contact">Contact:</label>
    <input type="number" name="contact" placeholder="Enter Contact:"> <br> <br>
    <button type="submit" >Submit</button>
</form>
</body>
</html>