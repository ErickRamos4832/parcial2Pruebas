<?php

$host = "localhost";
$user = "administrador";
$password = "admin123";
$db = "simplelogin";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}