<?php

$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


// INSERT
if (isset($_POST['insert'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO student(name, age, email, course)
            VALUES('$name', '$age', '$email', '$course')";

    if ($conn->query($sql)) {
        echo "<script>alert('Record Inserted Successfully');</script>";
    }
}


// UPDATE
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE student
            SET name='$name',
                age='$age',
                email='$email',
                course='$course'
            WHERE id='$id'";

    if ($conn->query($sql)) {
        echo "<script>alert('Record Updated Successfully');</script>";
    }
}


// DELETE
if (isset($_POST['delete'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM student WHERE id='$id'";

    if ($conn->query($sql)) {
        echo "<script>alert('Record Deleted Successfully');</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP CRUD Application</title>

    <style>

        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        input {
            width: 95%;
            padding: 10px;
            margin: 8px;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }

        table {
            width: 80%;
            margin-top: 30px;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Student CRUD Form</h2>

    <form method="post">

        <input type="number" name="id" placeholder="Enter ID for Update/Delete">

        <input type="text" name="name" placeholder="Enter Name">

        <!-- AGE OPTION -->
        <input type="number" name="age" placeholder="Enter Age">

        <input type="email" name="email" placeholder="Enter Email">

        <input type="text" name="course" placeholder="Enter Course">

        <br>

        <button type="submit" name="insert">Insert</button>

        <button type="submit" name="update">Update</button>

        <button type="submit" name="delete">Delete</button>

    </form>

</div>


<center>

<h2>Student Records</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Course</th>
</tr>

<?php

$result = $conn->query("SELECT * FROM student");

while ($row = $result->fetch_assoc()) {

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>
</tr>

<?php
}
?>

</table>

</center>

</body>
</html>