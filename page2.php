<?php

session_start();

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"] . "<br>";

?>