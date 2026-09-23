<?php

$conn = mysqli_connect("localhost", "root", "", "college");

$sql = "DELETE FROM student WHERE id=1";

if(mysqli_query($conn, $sql))
{
    echo "Record Deleted Successfully";
}
else
{
    echo "Error";
}

?>