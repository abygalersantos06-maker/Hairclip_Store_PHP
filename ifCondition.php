<?php
$name = 'Abygale';
$greeting = 'Hello';
include 'includes/header.php';

if ($name !== '') {
    $greeting = 'Hairclips Store in your Favor, '.$name;
}
include 'includes/footer.php';
?>
<h1>Lumina Hairclips Store</h1>
<h2><?= $greeting ?></h2>
