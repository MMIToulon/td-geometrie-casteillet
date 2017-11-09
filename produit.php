<?php
abstract class Produit {
	
	protected $Nom;
	public static $NbrProduits=0;
	protected static $NbrProduitsProtected=0;
	
	public abstract function CalculPrix($valeur);
	
	public function __construct($Name){
		$this->Nom=$Name;
		//FONCTION PUBLIQUE
		Produit::$NbrProduits=Produit::$NbrProduits+1;
		//FONCTION PROTEGEE
		Produit::$NbrProduitsProtected=Produit::$NbrProduitsProtected+1;
	}
	public static function afficheNombre() {
		echo self::$NbrProduits ;
	}
	
}
?>