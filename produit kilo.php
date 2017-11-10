<?php
require_once("produit.php");
class ProduitKilo extends Produit {
	
	protected $PrixKilo;
	
	public function __construct($Name,$PrixKilo) {
		parent::__construct($Name);
		$this->PrixKilo=$PrixKilo;
	}
	public function CalculPrix($poids){
		return $this->PrixKilo*$poids;
	}
	
}
?>
