<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hacking_challenge";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$user = $_POST["username"];

// 🔥 SQL Injection Vulnerable Query 🔥
$sql = "SELECT * FROM users WHERE username='$user'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Login Successful!";
} else {
    echo "Access Denied!";
}

$conn->close();
?>