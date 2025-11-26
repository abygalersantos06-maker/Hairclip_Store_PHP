<?php
include 'includes/header.php';

$stock = 5;

if ($stock > 0) {
    $message = '<span class="stock">In Stock</span>';
} else {
    $message = '<span class="sold-out">Sold Out</span>';
}
?>

<h1>Lumina Hairclips Store</h1>
<h2>Cloud Hairclip</h2>
<p><?= $message ?></p>

<?php include 'includes/footer.php'; ?>