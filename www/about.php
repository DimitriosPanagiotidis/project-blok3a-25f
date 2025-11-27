<?php
include 'session_check.php';


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>
    <header>
        <!-- NAVIGATION BAR -->
        <?php include 'navbar.php'; ?>
        <!-- END OF NAVIGATION -->
    </header>


    <main>

        <div class="about-section">
            <h2>Our Mission</h2>
            <p>We aim to provide the best travel experiences by connecting you with amazing destinations around the world. Our team is dedicated to help you find the perfect holiday spot that suits your preferences and budget.</p>
            
            <h2>Our Team</h2>
            <p>Our team consists of travel enthusiasts who have explored various parts of the world. We bring our passion for travel and expertise to help you plan your next adventure.</p>
            
        </div>
        <section class="about-extra">
            <h2>Why Choose Us?</h2>
            <ul>
                <li>Personalized travel recommendations</li>
                <li>Expert support from experienced travelers</li>
                <li>Wide selection of destinations and packages</li>
                <li>Transparent pricing with no hidden fees</li>
            </ul>
        </section>
        
        <section class="about-values">
            <h2>Our Values</h2>
            <p>We believe in honesty, integrity, and customer satisfaction. Our goal is to make your travel planning easy, enjoyable, and memorable.</p>
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, feel free to reach out to us through our <a href="contact.php">Contact Page!</a>. We're here to help!</p>
        </section>
    </main>


    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>
</html>