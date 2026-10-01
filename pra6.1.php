<?php
// Open file in write mode
$file = fopen("student.txt", "w");

// Write data into file
fwrite($file, "Name: Kavya\n");
fwrite($file, "Course: PHP\n");
fwrite($file, "Subject: File Handling\n");

// Close file
fclose($file);

echo "Data written successfully.<br><br>";

// Open file in read mode
$file = fopen("student.txt", "r");

// Read entire file
$content = fread($file, filesize("student.txt"));

// Display content
echo nl2br($content);

// Close file
fclose($file);
?>