<?php

// Open the file
$file = fopen("student.txt", "r");

if ($file) {
    echo "File opened successfully.<br>";

    // Close the file
    fclose($file);

    echo "File closed successfully.";
} else {
    echo "Unable to open the file.";
}

?>
