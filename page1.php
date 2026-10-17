<?php

session_start();

$_SESSION["username"] = "Kavya";
$_SESSION["course"] = "PHP";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"] . "<br><br>";

echo '<a href="page2.php?' . SID . '">Go to Page 2</a>';

?>