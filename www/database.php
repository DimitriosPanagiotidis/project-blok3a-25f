<?php
$host = 'mariadb';
$user = 'root';
$passworddb = 'password';
$database = 'project_blok3a';

$conn = mysqli_connect($host, $user, $passworddb, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>