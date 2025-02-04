<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($pass === "open_sesame") {
        header("Location: success.html");
        exit();
    } else {
        echo "<p style='color:red;'>❌ ACCESS DENIED! Intrusion detected. System compromised.</p>";
        echo "<p style='color:red;'>Code Successfully stopped with error
        {
         echo pass confirmed
        }
        Code successfully stopped with error code open_sesame.</p>";
    }
}
?>