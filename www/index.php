<?php
require 'database.php';
$sql = "SELECT * FROM destinations";

// FILTEREN OP CONTINENT
if (!empty($_GET['continent'])) {
    $continent = $_GET['continent'];
    $sql = "SELECT * FROM destinations WHERE continent = '$continent'";
}
// FILTEREN OP PRIJS OPLOPEND OF AFLOPEND
if (!empty($_GET['average_cost_per_day'])) {
    $average_cost_per_day = $_GET['average_cost_per_day'];
    $sql = "SELECT * FROM destinations ORDER BY average_cost_per_day ASC";
    if ($average_cost_per_day === 'high') {
        $sql = "SELECT * FROM destinations ORDER BY average_cost_per_day DESC";
    }
}


$result = mysqli_query($conn, $sql);
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
    <?php  if (isset($_GET['msg']) && $_GET['msg'] == 'registered'): ?>
        <script>
            alert("Registration successful!");
        </script>
    <?php endif; ?>
    <header>
        <!-- NAVBAR BAR -->
        <?php include 'navbar.php'; ?>
        <div>
            <h1>Holiday's Paradise</h1>
        </div>
        <!-- Filter Destinations -->
        <section class="filter-destinations">
            <ul>
                <li>
                    <a href="index.php">All Destinations</a>
                </li>
                <li>
                    <a href="?continent=Europe">Europe</a>
                </li>
                <li>
                    <a href="?continent=Asia">Asia</a>
                </li>
                <li>
                    <a href="?continent=North America">North America</a>
                </li>
                <li>
                    <a href="?continent=South America">South America</a>
                </li>
                <li>
                    <a href="?continent=Africa">Africa</a>
                </li>
                <li>
                    <a href="?continent=Australia">Australia</a>
                </li>
            </ul>
        </section>
    </header>
    <!-- SEARCH BOX -->
    <section class="search-box">
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search...">
            <button type="button">Search</button>
        </form>
    </section>
    <!-- DROPDOWN MENU  -->
    <section class="dropdown-menu">
        <div class="dropdown">
            <button>Prijs</button>
            <div class="content">
                <a href="?average_cost_per_day=low">Laag - Hoog</a>
                <a href="?average_cost_per_day=high">Hoog - Laag</a>
            </div>
        </div>
    </section>
    <!-- DESTINATIONS -->
    <main class="main-content">
        <?php foreach ($destinations as $destination): ?>
            <section class="destination-section">
                <div class="destination-card">
                    <h3><?php echo $destination['destination']; ?></h3>
                    <p>Country: <?php echo $destination['country']; ?></p>
                    <p>Continent: <?php echo $destination['continent']; ?></p>
                    <p>Average Cost per Day: $<?php echo number_format($destination['average_cost_per_day'], 2); ?></p>
                    <a href="detail-page.php?destinations-id=<?php echo $destination['id']; ?>">
                        <img src="<?php echo $destination['image']; ?> " alt="<?php echo $destination['destination']; ?>">
                    </a>
                </div>
            </section>
        <?php endforeach; ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>