<?php


include 'session_check.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body class="body">
    <?php // Redirect from create_destination to destination.php after the creation is completed.
    if (isset($_GET['msg']) && $_GET['msg'] == 'success'): ?>
    <script>
        alert("Your destination has been successfully added!");
    </script>
    <?php endif; ?>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>        
         <div class="form-wrapper">
            <div>
                <form action="create_destination.php" method="post">
                    <label for="destination">Destination: </label>
                    <input type="text" id="destination" name="destination" placeholder="Paris" required>
                    
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country" placeholder="country" required>
                    
                    <label for="continent">Continent</label>
                    <input type="text" id="continent" name="continent" placeholder="Europe" required>
                    
                    <label for="best_season">Best Season:</label>
                    <input type="text" id="best_season" name="best_season" placeholder="Spring" required>
                    
                    <label for="average_cost_per_day">Average cost per day:</label>
                    <input type="text" id="average_cost_per_day" name="average_cost_per_day" placeholder="100.00" required> 
                    
                    <label for="main_attraction">Main Attraction</label>
                    <input type="text" id="main_attraction" name="main_attraction" placeholder="Eiffel Tower" required>

                    <label for="language">Language</label>
                    <input type="text" id="language" name="language" placeholder="English" required>

                    <label for="currency">Currency</label>
                    <input type="text" id="currency" name="currency" placeholder="Euro" required>
                    
                    <label for="beach_destination">Beach Destination</label>
                    <input type="text" id="beach_destination" name="beach_destination" placeholder="1" required>

                    <button type="submit">Submit</button>
                </div>
            </div>
            </form>        
        </main>

    <footer class="footer">
        <p>Created by Dimitris Panagiotidis</p>
        <p>Student number : 203156</p>
    </footer>
</body>
</html>