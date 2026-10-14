<?php

$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Database connection failed");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
</head>

<body>

<h2>Search Student Record</h2>

<form method="post">

    Enter Student ID:
    <input type="number" name="student_id" required>

    <input type="submit" name="search" value="Search">

</form>

<br>

<?php

if (isset($_POST['search'])) {

    $student_id = $_POST['student_id'];

    $sql = "SELECT * FROM students WHERE id = '$student_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<table border='1' cellpadding='10'>";

        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Age</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

    }
    else {
        echo "No student record found.";
    }
}

mysqli_close($conn);

?>

</body>
</html>