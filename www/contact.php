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
    <header>
        <?php include 'navbar.php'; ?>
                                
    </header>

    <main>        
         <div class="form-wrapper">
            <div>
                <form action="#" method="post">
                    <label for="firstName">Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                    
                    <label for="lastName">Surname:</label>
                    <input type="text" id="lastName" name="lastName" required>
                    
                    <label for="tel">Telephone:</label>
                    <input type="tel" id="tel" name="tel">
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    
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