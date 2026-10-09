<?php

include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO users
        (username, password, email, mobile)
        VALUES
        ('$username', '$password', '$email', '$mobile')";

if (mysqli_query($conn, $sql)) {

    echo "Registration successful";

} else {

    echo "Registration failed";

}

?>