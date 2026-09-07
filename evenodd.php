<!DOCTYPE html>
<html>
<head>
    <title>Even Odd</title>
</head>
<body>

<h2>Even Odd Number</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if(isset($_POST['num']))
{
    $num=$_POST['num'];

    if($num%2==0)
        echo "$num is Even";
    else
        echo "$num is Odd";
}
?>

</body>
</html>