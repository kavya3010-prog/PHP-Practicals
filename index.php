
<!DOCTYPE html>
<html>
<head>
    <title>AJAX Image Upload</title>
</head>
<body>

<h2>Upload Image Using AJAX</h2>

<input type="file" id="image" accept="image/*">
<button onclick="uploadImage()">Upload Image</button>

<div id="result"></div>

<script>
function uploadImage() {
    var file = document.getElementById("image").files[0];

    if (!file) {
        alert("Please select an image!");
        return;
    }

    var formData = new FormData();
    formData.append("image", file);

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "upload.php", true);

    xhr.onload = function() {
        document.getElementById("result").innerHTML =
            xhr.responseText;
    };

    xhr.send(formData);
}
</script>

</body>
</html>
