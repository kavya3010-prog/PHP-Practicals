<!DOCTYPE html>
<html>
<head>
    <title>Prime Number</title>
</head>
<body>

<h2>Prime Number Program</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if(isset($_POST['num']))
{
    $num=$_POST['num'];
    $flag=1;

    if($num<=1)
    {
        $flag=0;
    }
    else
    {
        for($i=2;$i<$num;$i++)
        {
            if($num%$i==0)
            {
                $flag=0;
                break;
            }
        }
    }

    if($flag==1)
        echo "<h3>$num is Prime Number</h3>";
    else
        echo "<h3>$num is Not Prime Number</h3>";
}
?>

</body>
</html>