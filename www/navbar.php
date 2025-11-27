<?php 
$navigatie = [
    'Home'    => 'index.php',
    'About'   => 'about.php',
    'Contact' => 'contact.php',
    'Destination' => 'destination.php',
    'Login' => 'login.php',
    'Register' => 'register.php',
    'Logout' => 'logout.php'
];


?>




<nav class="navbar">
    <ul>
        <?php foreach($navigatie as $label => $link): ?>
            <li><a href="<?php echo $link ?>"><?php echo $label ?></a></li>
        <?php endforeach; ?>

    </ul>
</nav>