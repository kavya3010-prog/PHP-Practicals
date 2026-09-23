
<?php

$conn = mysqli_connect("localhost", "root", "", "college");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

?>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Course</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["course"]; ?></td>
</tr>

<?php
}

?>

</table>