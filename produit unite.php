<?php
require_once("Produit.php");
class ProduitUnite extends Produit {
	
	protected $PrixUnite;
	
	public function __construct($Name,$PrixUnite) {
		parent::__construct($Name);
		$this->PrixUnite=$PrixUnite;
	}
	public function CalculPrix($nombre){
		return $this->PrixUnite*$nombre;
	}
	
}
?>