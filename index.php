<?php
require("inc/header.php");
?>

<?php
require("Classes/Produit.php");
echo "Bonjour";

$hamac = new Produit();
$hamac->name = "Hamac";

var_dump($hamac);

$parasol = new Produit();
$parasol->name = "Parasol";

?>

<h1>Liste des produits</h1>


<?php
require("inc/footer.php");
?>

