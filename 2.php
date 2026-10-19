<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<p id="demo">Plese change the text. Load from ajax.txt</p>

<input type="button" value="Change Content" onclick="loadDoc()">
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
   xhttp.open("GET", "bvm.txt", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
}
</script>
</body>
</html>


