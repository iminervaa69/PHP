<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body style="width: 50%; margin: auto;">
    <form action="index.php" method="post">
        <label for="">username : </label>
        <input type="text" name="username"><br>
        <label for="" >age : </label>
        <input type="number" name="age"><br>
        <input type="submit" value="register">
    </form>
</body>
</html>
<?php
echo "my firts PHP script!<br>";
$age=null;

$username = $_POST["username"];
$age = $_POST["age"];

echo "Welcome {$username} <br>";
if($age <=0){
    echo"ERROR age not falid";
}
elseif($age >= 1000){
    echo"You are dead";
}
elseif($age >= 82){
    echo"You are to old";
}
elseif($age >= 18){
    echo"You are good to goo";
}
elseif($age < 18){
    echo"You are underage";
}


?>
