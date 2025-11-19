<?php


// Start of validation
// Destinations
if (empty($_POST['destination'])) {
    echo "Password mag niet leeg zijn.";
    exit;
}

if (strlen($_POST['destination']) < 3) {
    echo "Destinations moet minstens 3 karakters hebben.";
    exit;
}

// Country
if (empty($_POST['country'])) {
    echo "Country mag niet leeg zijn.";
    exit;
}
if (strlen($_POST['country']) < 3) {
    echo "Country moet minstens 3 karakters hebben";
    exit;
}


// Continent
if (empty($_POST['continent'])) {
    echo "Destination mag niet leeg zijn.";
    exit;
}

if (strlen($_POST['continent']) < 3) {
    echo "Continent mag moet minstens 3 karakters hebben";
    exit;
}

// Best Season

if (empty($_POST['best_season'])) {
    echo "Best Season mag niet leeg zijn.";
    exit;
}

if (strlen($_POST['best_season']) < 3) {
    echo "Best season moet minstens 3 karakters hebben";
    exit;
}

// Average Cost Per Day
if (empty($_POST['average_cost_per_day'])) {
    echo "Average cost per day mag niet leeg zijn.";
    exit;
}
if (!is_numeric($_POST['average_cost_per_day'])) {
    echo "Average cost per day moet een geldig nummer zijn.";
    exit;
}
if (strlen($_POST['average_cost_per_day']) < 2) {
    echo "Average cost per day moet minstens 2 karakters hebben";
    exit;
}

// Main Attraction

if (empty($_POST['main_attraction'])) {
    echo "Main attraction mag niet leeg zijn.";
    exit;
}
if (strlen($_POST['main_attraction']) < 3) {
    echo "Main attraction moet minstens 3 karakters hebben";
    exit;
}


// Language

if (empty($_POST['language'])) {
    echo "Language mag niet leeg zijn.";
    exit;
}

if (strlen($_POST['language']) < 3) {
    echo "Language moet minstens 3 karakters hebben";
    exit;
}

// Currency

if (empty($_POST['currency'])) {
    echo "Currency mag niet leeg zijn.";
    exit;
}

if (strlen($_POST['currency']) < 3) {
    echo "Currency moet minstens 3 karakters hebben";
    exit;
}

// Beach Destination

if (empty($_POST['beach_destination'])) {
    echo "Beach destination mag niet leeg zijn.";
    exit;
}
if (!is_numeric($_POST['beach_destination'])) {
    echo "Beach destination moet een geldig nummer zijn.";
    exit;
}

if(strlen($_POST['beach_destination']) < 1) {
    echo "Beach destination moet minstens 1 karakter hebben";
    exit;
}

// end of validation

$destination = $_POST['destination'];
$country = $_POST['country'];
$continent = $_POST['continent'];
$best_season = $_POST['best_season'];
$average_cost = $_POST['average_cost_per_day'];
$main_attraction = $_POST['main_attraction'];
$language = $_POST['language'];
$currency = $_POST['currency'];
$beach_destination = $_POST['beach_destination'];
$image = null;


require 'database.php';
$sql = "INSERT INTO destinations (destination, country, continent, best_season, average_cost_per_day, main_attraction, language, currency, beach_destination, image)
                VALUES ('$destination','$country','$continent','$best_season','$average_cost','$main_attraction','$language','$currency','$beach_destination','$image')";
if (mysqli_query($conn, $sql)) {
    header("location: destination.php?msg=success"); 
exit;
}