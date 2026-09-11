<?php 
include("header.php");
 ?>

<h2>Contact Us</h2>

<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>

        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile" required></td>
        </tr>

        <tr>
            <td>Message</td>
            <td>
                <textarea name="message" rows="5" cols="30" required></textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Send"></td>
        </tr>
    </table>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "<h3>Message Received</h3>";
    echo "Name : ".$_POST["name"]."<br>";
    echo "Email : ".$_POST["email"]."<br>";
    echo "Mobile : ".$_POST["mobile"]."<br>";
    echo "Message : ".$_POST["message"];
}
?>

<?php 
include("footer.php"); 
?>