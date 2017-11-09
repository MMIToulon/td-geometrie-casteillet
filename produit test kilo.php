<?php
	require_once("Produit.php");
	require_once("ProduitsKilo.php");
	$Produit1 = new ProduitKilo("Pate",5);
	$Produit2 = new ProduitKilo("Banane",10);
	//2 KILO DE PATE
	$Total1 = $Produit1->CalculPrix(2);
	echo "Prix total: ".$Total1." € ";
	echo"</br>";
	//6 KILO DE BANANE
	$Total2 = $Produit2->CalculPrix(6);
	echo "Prix Total: ".$Total2." € ";
	echo"</br>";
?>