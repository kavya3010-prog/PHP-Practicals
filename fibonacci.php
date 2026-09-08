<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>
<body>

<h2>Fibonacci Series</h2>

<form method="post">
    Enter Limit:
    <input type="number" name="n">
    <input type="submit" value="Generate">
</form>

<?php
if(isset($_POST['n']))
{
    $n=$_POST['n'];
    $a=0;
    $b=1;

    for($i=1;$i<=$n;$i++)
    {
        echo $a." ";
        $c=$a+$b;
        $a=$b;
        $b=$c;
    }
}
?>

</body>
</html>