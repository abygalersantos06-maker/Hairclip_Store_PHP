<?php
include 'includes/header.php';
$price = 1.99;
?>
<h1>Lumina Hairclips Store</h1>
<h2>Prices for bigger batch</h2>
<p>
    <?php
    for ($i = 10; $i <= 100; $i + 10){
        echo $i;
        echo ' batch $';
        echo $price * $i;
        echo '<br>';
        break;
    }
    include 'includes/footer.php';
    ?>
</p>
  