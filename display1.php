<?php

$conn = mysqli_connect("localhost", "root", "", "college");

$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql);

echo "<h2>Student Details</h2>";

while($row = mysqli_fetch_assoc($result))
{
    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Age: " . $row["age"] . "<br>";
    echo "Course: " . $row["course"] . "<br>";
    echo "<hr>";
}

?>