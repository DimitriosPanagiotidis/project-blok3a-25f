<?php
$host = 'mariadb';
$user = 'root';
$password = 'password';
$database = 'project_blok3a';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>