<?php

$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* Get ID from Update button */
$id = $_GET['id'];

/* Fetch selected student data */
$result = mysqli_query($conn, "SELECT * FROM students WHERE id='$id'");

$row = mysqli_fetch_assoc($result);


/* Update student data */
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "UPDATE students 
            SET name='$name',
                age='$age',
                email='$email'
            WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {

        header("Location: index.php");
        exit();

    } else {

        echo "Data not updated";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Student</title>
</head>

<body>

<h2>Update Student Details</h2>

<form method="post">

    <label>Name:</label>
    <input type="text" name="name"
           value="<?php echo $row['name']; ?>"
           required>

    <br><br>

    <label>Age:</label>
    <input type="number" name="age"
           value="<?php echo $row['age']; ?>"
           required>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email"
           value="<?php echo $row['email']; ?>"
           required>

    <br><br>

    <input type="submit" name="update" value="Update">

</form>

</body>
</html>
