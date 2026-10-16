<?php

setcookie("username", "Kavya", time() + 3600, "/");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>

<body>

<h2>Cookie Demonstration</h2>

<?php

if (isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"];
}
else {
    echo "Cookie created successfully. Refresh the page.";
}

?>

</body>
</html>