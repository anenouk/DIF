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
    $route = $_POST['route'];

    $sql = "INSERT INTO route (adres) VALUES ('$route')";

    if (mysqli_query($conn, $sql)) {
        echo 'Data inserted successfully!';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
