<?php
include 'includes/header.php';
$batch = 5;
$price = 1.99;
?>

<h1>Lumina Hairclips Store</h1>
<h2>Prices per batch</h2>
<p>
    <?php
    do {
        echo $batch;
        echo ' batch; $';
        echo $price * $batch;
        echo '<br>';
        $batch--;
    } while ($batch > 0);
    include 'includes/footer.php'; 
    ?>
</p>