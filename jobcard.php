<?php

// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed");
}


// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS Jobcard";
mysqli_query($conn, $sql);


// Select Database
mysqli_select_db($conn, "Jobcard");


// Create Table
$sql = "CREATE TABLE IF NOT EXISTS jobdetail (
    id INT PRIMARY KEY,
    engineer_name VARCHAR(50),
    department VARCHAR(50),
    mobile VARCHAR(10)
)";

mysqli_query($conn, $sql);


// Insert Data
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $engineer_name = $_POST['engineer_name'];
    $department = $_POST['department'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO jobdetail
            (id, engineer_name, department, mobile)
            VALUES
            ('$id', '$engineer_name', '$department', '$mobile')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Job Card</title>
</head>

<body>

<h2>Job Card Form</h2>

<form method="post">

    ID:
    <input type="number" name="id" required>
    <br><br>

    Engineer Name:
    <input type="text" name="engineer_name" required>
    <br><br>

    Department:
    <input type="text" name="department" required>
    <br><br>

    Mobile:
    <input type="text" name="mobile" maxlength="10" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

</body>

</html>