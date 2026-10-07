<!DOCTYPE html>
<html>
<head>
    <title>AJAX Registration</title>
</head>

<body>

<h2>Registration Form</h2>

<form id="myform">

    Username:
    <input type="text" id="username" name="username">
    <span id="userMsg"></span>

    <br><br>

    Password:
    <input type="password" id="password" name="password">

    <br><br>

    Confirm Password:
    <input type="password" id="confirm" name="confirm">

    <br><br>

    Email:
    <input type="text" id="email" name="email">

    <br><br>

    Mobile:
    <input type="text" id="mobile" name="mobile">

    <br><br>

    <input type="submit" value="Register">

</form>

<p id="result"></p>


<script>

// CASE 2:
// Check username using AJAX

document.getElementById("username").onkeyup = function() {

    var username = this.value;

    if (username == "") {
        document.getElementById("userMsg").innerHTML = "";
        return;
    }

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "check_username.php", true);

    xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("userMsg").innerHTML =
                this.responseText;
        }
    };

    xhttp.send("username=" + username);
};


// Form submit

document.getElementById("myform").onsubmit = function(e) {

    e.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirm = document.getElementById("confirm").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;


    // Username validation

    if (!/^[A-Za-z0-9]+$/.test(username)) {

        document.getElementById("result").innerHTML =
            "Username must contain only letters and numbers.";

        return;
    }


    // Password validation

    if (password.length < 6) {

        document.getElementById("result").innerHTML =
            "Password must contain at least 6 characters.";

        return;
    }


    // Confirm password

    if (password != confirm) {

        document.getElementById("result").innerHTML =
            "Passwords do not match.";

        return;
    }


    // Email validation

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {

        document.getElementById("result").innerHTML =
            "Invalid email.";

        return;
    }


    // Mobile validation

    if (!/^[0-9]{10}$/.test(mobile)) {

        document.getElementById("result").innerHTML =
            "Mobile number must contain 10 digits.";

        return;
    }


    // AJAX registration

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "register.php", true);

    xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("result").innerHTML =
                this.responseText;

        }
    };


    var data =
        "username=" + username +
        "&password=" + password +
        "&email=" + email +
        "&mobile=" + mobile;

    xhttp.send(data);
};

</script>

</body>
</html>