<?php
	require_once("produit.php");
	require_once("produit unite.php");
	$Produit1 = new ProduitUnite("Pate",1);
	$Produit2 = new ProduitUnite("Banane",5);
	//3 PAQUETS DE PATES
	$Total1 = $Produit1->CalculPrix(3);
	echo "Prix Total: ".$total." € ";
	echo"</br>";
	//10 BANANES
	$Total2 = $Produit2->CalculPrix(10);
	echo "Prix Total: ".$Total2." € ";
	echo"</br>";
?>
