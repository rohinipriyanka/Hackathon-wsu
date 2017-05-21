<?php
require_once("config.php");
session_start();

$myusername = mysqli_real_escape_string($mysqli, $_POST['username']);
$mypassword = mysqli_real_escape_string($mysqli, $_POST['password']);
$myemail = mysqli_real_escape_string($mysqli, $_POST['email']);
$confirm = mysqli_real_escape_string($mysqli, $_POST['confirmpassword']);
$sql = "INSERT INTO subscribers (username, email, password)VALUES('$myusername','$myemail','$mypassword')";
$result = $mysqli->query($sql);

if (!$result) {
    print $mysqli->error;
}
?>
<html>
    <body>
        <h1>
            Account Created
        </h1>
        <p>
            Go to <a href="index.php">login page</a>.
        </p>
    </body>
</html>
