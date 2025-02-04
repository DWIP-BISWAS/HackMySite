<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($pass === "why are you here") {
        header("Location: success.html");
        exit();
    } else {
        echo "<p style='color:red;'>⚠️ ERROR: Wrong Password Entered!</p>";
    }
}
?>