<?php
	require_once("Produit.php");
	require_once("ProduitsKilo.php");
	require_once("ProduitUnite.php");
	
	$Produit1 = new ProduitKilo("Kiwi",50);
	$Produit2 = new ProduitUnite("Noix de Coco",5);
	
	//FONCTION PUBLIQUE
	$nbr = Produit::$NbrProduits;
	echo "Nombre produits :".$nbr;
	//FONCTION PROTEGEE
	echo "Nombre produits :";
	Produit::afficheNombre();
?>