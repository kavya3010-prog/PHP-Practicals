<?php

if (isset($_POST['submit'])) {

    $student_id = $_POST['student_id'];

    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileTmp = $_FILES['image']['tmp_name'];
    $fileError = $_FILES['image']['error'];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $folder = "D:/Student/";

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    if ($extension != "jpg" && $extension != "jpeg") {
        echo "Only JPEG images are allowed.";
    }
    elseif ($fileSize >= 200 * 1024) {
        echo "File size must be less than 200 KB.";
    }
    elseif ($fileError != 0) {
        echo "Error while uploading file.";
    }
    else {

        $newName = $student_id . ".jpg";

        if (move_uploaded_file($fileTmp, $folder . $newName)) {
            echo "Image uploaded successfully.";
            echo "<br>File Name: " . $newName;
        }
        else {
            echo "Failed to upload image.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>

<body>

<h2>Student Image Upload</h2>

<form method="post" enctype="multipart/form-data">

    Student ID:
    <input type="text" name="student_id" required>

    <br><br>

    Select JPEG Image:
    <input type="file" name="image" accept=".jpg,.jpeg" required>

    <br><br>

    <input type="submit" name="submit" value="Upload">

</form>

</body>
</html>