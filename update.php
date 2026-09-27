<?php

$conn = mysqli_connect("localhost", "root", "", "college");

$sql = "UPDATE student
        SET name='Kavya', age=21
        WHERE id=1";

if(mysqli_query($conn, $sql))
{
    echo "Record Updated Successfully";
}
else
{
    echo "Error";
}

?>