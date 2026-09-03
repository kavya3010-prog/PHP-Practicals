<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number</title>
</head>
<body>

<h2>Reverse Number</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Reverse">
</form>

<?php
if(isset($_POST['num']))
{
    $num=$_POST['num'];
    $temp=$num;
    $rev=0;

    while($temp>0)
    {
        $r=$temp%10;
        $rev=$rev*10+$r;
        $temp=(int)($temp/10);
    }

    echo "Reverse Number = ".$rev;
}
?>

</body>
</html>