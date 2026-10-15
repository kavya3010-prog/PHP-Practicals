<?php

// SESSION

session_start();

$_SESSION["username"] = "Kavya";

echo "Session Username: ";
echo $_SESSION["username"];

echo "<br><br>";


// COOKIE

setcookie("user", "Kavya", time() + 3600, "/");

if (isset($_COOKIE["user"])) {
    echo "Cookie Username: ";
    echo $_COOKIE["user"];
}
else {
    echo "Cookie created. Refresh the page.";
}

?>