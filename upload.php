
<?php
if (isset($_FILES['image'])) {

    $file = $_FILES['image'];

    if ($file['error'] != 0) {
        echo "Error uploading image!";
        exit;
    }

    // Check that the uploaded file is an actual image
    $imageInfo = getimagesize($file['tmp_name']);

    if ($imageInfo === false) {
        echo "Please upload a valid image!";
        exit;
    }

    // Allow common image formats only
    $allowedTypes = array(
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/webp'
    );

    $type = $imageInfo['mime'];

    if (!in_array($type, $allowedTypes)) {
        echo "Only JPG, PNG, GIF and WEBP images are allowed!";
        exit;
    }

    // Create uploads folder if it does not exist
    if (!is_dir("uploads")) {
        mkdir("uploads", 0755);
    }

    $name = basename($file['name']);
    $size = $file['size'];
    $time = date("d-m-Y h:i:s A");

    // Generate a unique filename
    $extension = image_type_to_extension(
        $imageInfo[2], false
    );

    $newName = uniqid("img_", true) . "." . $extension;
    $path = "uploads/" . $newName;

    if (move_uploaded_file($file['tmp_name'], $path)) {

        echo "<h3>Image Uploaded Successfully!</h3>";

        echo "<img src='$path' width='200' alt='Uploaded image'>";
        echo "<p><b>File Name:</b> "
             . htmlspecialchars($name) . "</p>";

        echo "<p><b>File Size:</b> "
             . round($size / 1024, 2) . " KB</p>";

        echo "<p><b>File Type:</b> "
             . htmlspecialchars($type) . "</p>";

        echo "<p><b>Upload Time:</b> "
             . $time . "</p>";

    } else {
        echo "Failed to upload image!";
    }
}
?>
