<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    input USD
    <input type="text" name="inputUsd"/>
    <input type="submit" />
    <?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $usd = $_POST["inputUsd"];
        echo 23000*$usd."VND";
    }
    ?>
</form>
</body>
</html>