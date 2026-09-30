<?php

$conn = mysqli_connect("localhost", "root", "", "company");

if (!$conn)
{
    die("Connection failed");
}

$sql = "SELECT * FROM employee";

$result = mysqli_query($conn, $sql);

?>

<h2>Employee Details</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>
    <th>Department</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
</tr>

<?php
}

?>

</table>