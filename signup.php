<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ijsiets';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo 'Sign up successful!';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>