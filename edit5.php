<?php

$conn = mysqli_connect("localhost", "root", "", "collegedb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM student12 WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Student not found");
}

if (isset($_POST['edit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "UPDATE student12
            SET name='$name',
                age='$age',
                email='$email'
            WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {

        header("Location: index5.php");
        exit();

    } else {

        echo "Error: " . mysqli_error($conn);

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

<h2>Edit Student</h2>

<form method="post">

    Name:
    <input type="text"
           name="name"
           value="<?php echo $row['name']; ?>"
           required>

    <br><br>

    Age:
    <input type="number"
           name="age"
           value="<?php echo $row['age']; ?>"
           required>

    <br><br>

    Email:
    <input type="email"
           name="email"
           value="<?php echo $row['email']; ?>"
           required>

    <br><br>

    <input type="submit"
           name="edit"
           value="Save Changes">

</form>

<br>

<a href="index5.php">Back to Student Details</a>

</body>

</html>