<?php
	require_once("produit.php");
	require_once("produit kilo.php");
	require_once("produit unite.php");
	
	$Produit1 = new ProduitKilo("Pate",5);
	$Produit2 = new ProduitUnite("Banane",10);
	
	//FONCTION PUBLIQUE
	$nbr = Produit::$NbrProduits;
	echo "Nombre produits :".$nbr;
	//FONCTION PROTEGEE
	echo "Nombre produits :";
	Produit::afficheNombre();
?>
