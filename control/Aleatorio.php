<?php

class Aleatorio{

	function ___construct(){}

	function ___destruct(){}

	private $random;

	public function setRandom(){
		$random = rand(0,9999);
		switch ($random) {
	        case strlen($random)==0:
	        	$rand="7774".$random;
	        break;
	   	    case strlen($random)==1:
	        	$rand="777".$random;
	        break;
	        case strlen($random)==2:
	            $rand="77".$random;
	        break;
	        case strlen($random)==3:
	            $rand="7".$random;
	        break;
	        default:
	        	$rand = $random;
        }
		return 0+ $rand;
	}

}

?>