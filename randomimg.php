<!DOCTYPE html>
<html>
<head>
    <title>Random Image</title>
</head>
<body>

<h2>Random Image</h2>

<?php
$images=array(
    "image1.jpg",
    "image2.jpg",
    "image3.jpg",
    "image4.jpg"
);

$random=$images[array_rand($images)];

echo "<img src='$random' width='300' height='250'>";
?>

</body>
</html>