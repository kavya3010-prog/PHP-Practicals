<!DOCTYPE html>
<html>
<head>
    <title>Swap Numbers</title>
</head>
<body>

<h2>Swap Two Numbers</h2>

<form method="post">
    First Number:
    <input type="number" name="a"><br><br>

    Second Number:
    <input type="number" name="b"><br><br>

    <input type="submit" value="Swap">
</form>

<?php
if(isset($_POST['a']) && isset($_POST['b']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];

    echo "Before Swap: a=$a b=$b <br>";

    $temp=$a;
    $a=$b;
    $b=$temp;

    echo "After Swap: a=$a b=$b";
}
?>

</body>
</html>