<?php
include 'includes/header.php';
$counter = 1;
$batch = 5;
$price = 1.99;
?>

<h1>Lumina Hairclips Store</h1>
<h2>Prices per batch</h2>
<p>
    <?php
    while ($counter <= $batch){
        echo $counter;
        echo ' batch; $';
        echo $price * $counter;
        echo '<br>';
        $counter++;
    }
    include 'includes/footer.php'; 
    ?>
</p>
   