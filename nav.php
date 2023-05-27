<?php
    $firstLink = isset($_POST['firstLink']) && !empty($_POST['firstLink']) ? $_POST['firstLink'] : "Home";
    $secondLink = isset($_POST['secondLink']) && !empty($_POST['secondLink']) ? $_POST['secondLink'] : "about";
    $thirdLink = isset($_POST['thirdLink']) && !empty($_POST['thirdLink']) ? $_POST['thirdLink'] : "Contact";
?>
    <nav>
        <a href="home.html"><?php echo $firstLink?></a>
        <a href="about.html"><?php echo $secondLink?></a>
        <a href="contact.html"><?php echo $thirdLink?></a>
    </nav>
