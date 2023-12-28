<?php
$host = "sql303.infinityfree.com";
$username = 'if0_35687638';
$password = 'XyS8yPAwKivP';
$database = "if0_35687638_mydatabase";


$conn = mysqli_connect($host, $username, $password, $database);

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>


