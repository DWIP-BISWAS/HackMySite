<?php
$correct_password = "skibidi";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = trim($_POST["password"]);
    
    if ($entered_password === $correct_password) {
        header("Location: success.html");
        exit();
    } else {
        echo "<script>alert('Wrong password. Try again!'); window.history.back();</script>";
    }
}
?>