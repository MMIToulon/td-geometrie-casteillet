<?php
	require_once("Produit.php");
	require_once("ProduitsKilo.php");
	require_once("ProduitUnite.php");
	
	$Produit1 = new ProduitKilo("Pate",5);
	$Produit2 = new ProduitUnite("Banane",10);
	
	//FONCTION PUBLIQUE
	$nbr = Produit::$NbrProduits;
	echo "Nombre produits :".$nbr;
	//FONCTION PROTEGEE
	echo "Nombre produits :";
	Produit::afficheNombre();
?>