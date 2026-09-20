<?php

$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";

?>