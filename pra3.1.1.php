<html>
    <body>
        <form method="POST">
        Name:<input type="text" name="name" required>
        <input type = "submit" name="submit">
</form>
<?php
function myname($firstname)
{
    echo "my name is ".$firstname;
}
if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        myname($name);
    }
?>
</body>
</html>