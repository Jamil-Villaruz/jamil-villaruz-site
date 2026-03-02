<?php
$host = "localhost";
$user = "root";       // default in XAMPP
$pass = "";           // default in XAMPP
$db   = "jamil-villaruz-website-db"; // your database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
