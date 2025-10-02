<?php
// include 'destination-tables.php';
require 'database.php';

$sql = "SELECT * FROM destinations";

$result = mysqli_query($conn,$sql);

$destinations = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holidays</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>
    <header>
        <!-- NAVIGATION BAR -->
        <?php include 'navbar.php'; ?>
        <!-- END OF NAVIGATION -->

        <h1>Holiday's Paradise</h1>

        <!-- SEARCH BOX -->
         <div class="search-box">
             <form action="search.php" method="GET">
                 <input type="text" name="query" placeholder="Search...">
                 <button type="button">Search</button>
                </form>
        </div>
        <!-- END OF SEARCH BOX -->
        <h2>Destinations</h2>
    </header>
    <!-- DESTINATIONS -->
    <main class="main-content">
        <?php foreach ($destinations as $destination): ?>
        <section class="destination-section">
            <div class="destination-card">
                <h3><?php echo $destination['destination']; ?></h3>
                <p>Country: <?php echo $destination['country']; ?></p>
                <p>Continent: <?php echo $destination['continent']; ?></p>
                <p>Average Cost per Day: $<?php echo number_format($destination['average_cost_per_day'], 2); ?></p>
                <a href="detail-pagina.php?destinations-id=<?php echo $destination['id']; ?>">
                    <img src="<?php echo $destination['image']; ?> "alt="<?php echo $destination['destination']; ?>">
                </a>
            </div>
            </section>
        <?php endforeach; ?>
     <!-- END OF DESTINATIONS  -->
    </main>
    





    <footer>
        <?php include 'footer.php'; ?>
    </footer>


</body>
</html>