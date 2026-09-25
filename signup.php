<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "student_db");

if (!$conn) {
    die("Connection failed");
}


// Check username availability
if (isset($_GET['username'])) {

    $username = $_GET['username'];

    $sql = "SELECT * FROM students WHERE username='$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists";
    } else {
        echo "Username is available";
    }

    exit();
}


// Signup
if (isset($_POST['signup'])) {

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $email     = $_POST['email'];
    $mobile    = $_POST['mobile'];


    // Mobile validation
    if (!preg_match("/^[0-9]{10}$/", $mobile)) {

        echo "Invalid mobile number";
    }

    // Email validation
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "Invalid email address";
    }

    // Password validation
    elseif (strlen($password) < 6) {

        echo "Password must be at least 6 characters";
    }

    else {

        // Check username
        $check = "SELECT * FROM students
                  WHERE username='$username'";

        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0) {

            echo "Username already exists";

        } else {

            // Insert data
            $sql = "INSERT INTO students
                    (firstname, lastname, username, password, email, mobile)
                    VALUES
                    ('$firstname', '$lastname', '$username',
                     '$password', '$email', '$mobile')";

            if (mysqli_query($conn, $sql)) {

                echo "Signup successful!";

            } else {

                echo "Signup failed";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
</head>

<body>

<h2>Student Signup</h2>

<form method="POST">

    First Name:
    <input type="text" name="firstname" required>
    <br><br>

    Last Name:
    <input type="text" name="lastname" required>
    <br><br>

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    Email:
    <input type="text" name="email" required>
    <br><br>

    Mobile Number:
    <input type="text" name="mobile" maxlength="10" required>
    <br><br>

    <input type="submit" name="signup" value="Sign Up">

</form>

</body>
</html>