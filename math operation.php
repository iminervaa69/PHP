<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7.php">
        <label for="">x :</label>
        <input type="number" name="x" >
        <label for="">y :</label>
        <input type="number" name="y" >
        <input type="submit" value="call">
    </form>
</body>
</html>
<?php
$x = 5;
$y = 4;
echo $x+$y;
$x = 5;
$y = 4;

?>