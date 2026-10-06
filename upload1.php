
<?php

if (isset($_POST['upload'])) {

    $fileName = $_FILES['myfile']['name'];
    $fileTmp = $_FILES['myfile']['tmp_name'];

    // Get file extension
    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed extensions
    $allowed = array("doc", "docx", "pdf");

    // Check extension
    if (in_array($extension, $allowed)) {

        // Destination folder
        $folder = "Student/mydata/";

        // Create folder if it does not exist
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        // Move file
        if (move_uploaded_file($fileTmp, $folder . $fileName)) {
            echo "File uploaded successfully.";
        } else {
            echo "File upload failed.";
        }

    } else {
        echo "Only DOC, DOCX and PDF files are allowed.";
    }
}

?>
