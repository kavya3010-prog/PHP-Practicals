<?php

$conn = mysqli_connect("localhost", "root", "", "collegedb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM student12 WHERE id='$id'";

if (mysqli_query($conn, $sql)) {

    header("Location: index5.php");
    exit();

} else {

    echo "Error: " . mysqli_error($conn);

}

?>