<?php

require 'database.php';
// Start of validation
// Registeration
if(empty($_POST['firstname'])){
    echo "First name mag niet leeg zijn.";
    exit;
}
if(strlen($_POST['firstname']) < 2){
    echo "First name moet minstens 2 karakters hebben.";
    exit;
}

// Lastname
if(empty($_POST['lastname'])){
    echo "Last name mag niet leeg zijn.";
    exit;
}
if(strlen($_POST['lastname']) < 2){
    echo "Last name moet minstens 2 karakters hebben.";
    exit;
}
// Email
if(empty($_POST['email'])){
    echo "Email mag niet leeg zijn.";
    exit;
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "Email moet een geldig e-mailadres zijn.";
    exit;
}
if(strlen($_POST['email']) < 5){
    echo "Email moet minstens 5 karakters hebben.";
    exit;
}

// Password
if(empty($_POST['password'])){
    echo "Password mag niet leeg zijn.";
    exit;
}
if(strlen($_POST['password']) < 8){
    echo "Password moet minstens 6 karakters hebben.";
    exit;
}

// Post code
if(!empty($_POST['zip_code']) && strlen($_POST['zip_code']) < 6){
    echo "Post code moet 6 karakters hebben. (1234 AB) 4 cijfers en 2 letters.";
    exit;
}

// All validations passed, proceed with registration
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role_form'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$phone_number = $_POST['phone_number'];
$sql = "INSERT INTO users (firstname, lastname, email, password, role, city, zip_code, phone_number)
                VALUES ('$firstname', '$lastname', '$email', '$password', '$role', '$city', '$zip_code', '$phone_number')";
if (mysqli_query($conn, $sql)) {
    header("location: index.php?msg=registered");
    exit;
} 
?>