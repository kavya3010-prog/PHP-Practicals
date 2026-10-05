<?php

if (isset($_POST['upload'])) {

    if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == 0) {

        $fileName = $_FILES['myfile']['name'];
        $fileTmp = $_FILES['myfile']['tmp_name'];

        $extension = strtolower(
            pathinfo($fileName, PATHINFO_EXTENSION)
        );

        if ($extension == "doc" || $extension == "pdf") {

            if (!is_dir("uploads")) {
                mkdir("uploads");
            }

            $destination = "uploads/" . basename($fileName);

            if (move_uploaded_file($fileTmp, $destination)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error while moving the file.";
            }

        } else {
            echo "Invalid file type. Only DOC and PDF are allowed.";
        }

    } else {
        echo "Please select a file.";
    }
}
?>