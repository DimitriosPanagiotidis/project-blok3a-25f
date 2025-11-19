<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer jezelf hier</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>
        <div class="form-wrapper">
            <div>
                <form action="register_process.php" method="post">
                    <div class="form-group">
                        <label for="firstname">First name: </label>
                        <input type="text" id="firstname" name="firstname" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last name: </label>
                        <input type="text" id="lastname" name="lastname" placeholder="Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password" placeholder="********" required>
                    </div>
                    <div class="form-group">
                        <label for="role_form">Select your role</label>
                        <select name="role_form" id="role_form">
                            <option value="administrator">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" placeholder="Amsterdam">
                    </div>
                    <div class="form-group">
                        <label for="zip_code">Zip Code:</label>
                        <input type="text" id="zip_code" name="zip_code" placeholder="1234 AB">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone number:</label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="+31 6 12345678">
                    </div>
                    <button type="submit">Register</button>
            </div>
        </div>
        </form>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>