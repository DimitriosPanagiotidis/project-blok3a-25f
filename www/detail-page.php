<?php

require 'database.php';


$id = $_GET ['destinations-id'];
$sql = "SELECT * FROM destinations WHERE id = $id";
$result = mysqli_query($conn,$sql);
$destination = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $destination['destination']; ?></title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>
        <section class="detail-pagina-section">
            <div class="detail-container">
                <h1>Destination: <?php echo $destination['destination']; ?></h1>
                <p>Country: <?php echo $destination['country']; ?></p>
                <p>Continent: <?php echo $destination['continent']; ?></p>
                <p>Average Cost per Day: $<?php echo number_format($destination['average_cost_per_day'], 2); ?></p>
                <p>Main Attraction: <?php echo $destination['main_attraction']; ?></p>
                <p>Language: <?php echo $destination['language']; ?></p>
                <p>Currency: <?php echo $destination['currency']; ?></p>
                <p>Beach Destination: <?php echo $destination['beach_destination']; ?></p>
                <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['destination']; ?>">
            </div>
        </section>
            

    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>

