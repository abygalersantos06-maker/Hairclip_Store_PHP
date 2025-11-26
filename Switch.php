<?php
include 'includes/header.php';
$colorChoice = 'white';


switch ($colorChoice) {
  case "red":
    echo "Your choice of color is red!";
    break;
  case "blue":
    echo "Your choice of color is blue!";
    break;
  case "green":
    echo "Your choice of color is green!";
    break;
  default:
    echo "Your choice of color is neither red, blue, nor green!";
}
?>
<h1>Lumina Hairclips Store</h1>
<h2>Hairclip color choice: <?= $colorChoice?></h2>
<?php include 'includes/footer.php'; ?>
    