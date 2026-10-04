
<?php

// Writing data into the file
$file = fopen("student.txt", "w");

fwrite($file, "Hello, this is PHP file handling.\n");
fwrite($file, "This is a simple example of writing and reading a file.");

fclose($file);

echo "Data written successfully.<br><br>";

// Reading data from the file
$file = fopen("student.txt", "r");

$data = fread($file, filesize("student.txt"));

echo "Data read from the file:<br>";
echo $data;

fclose($file);

?>
