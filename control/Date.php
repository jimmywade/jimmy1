<?php
	    
class Date{

	function ___construct(){}

	function ___destruct(){}


	public function oneYearAgo(){
		$timestamp = date("Y-m-d H:i:s");
		$nuevafecha = strtotime ( '-1 year' , strtotime ( $timestamp ) ) ;
		$nuevafecha = date ( "Y-m-d H:i:s" , $nuevafecha );
	    return $nuevafecha = substr($nuevafecha, 0, 10);
	}

    public function joinDateTime(){
	    $fechaSinFormatear = date("Y-m-d H:i:s");
	    $sobran = array("-", ":", " ");
	    $fecha = str_replace($sobran, "", $fechaSinFormatear);
	    return $fecha;
	}


    public function oneMonthAgoJoined(){
	    $fecha = date('Y-m-j');
		$nuevafecha = strtotime ( '-30 day' , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
	    $sobran = array("-", ":", " ");
	    $fecha = str_replace($sobran, "", $nuevafecha);
	    return $fecha;
	}



	public function oneMonthAgoTimeSt(){
        $timestamp = date("Y-m-d H:i:s");
		$nuevafecha = strtotime ( '-30 day' , strtotime ( $timestamp ) ) ;
		$nuevafecha = date ( "Y-m-d H:i:s" , $nuevafecha );
	    return $nuevafecha;
	}


	public function estaFecha(){
        $fecha = date("Y/m/d");
	    return substr($fecha,2,10);
	}


	public function agg($toAdd){
	    $fecha = date('Y/m/d');
		$added = strtotime ( '+'.$toAdd.' day' , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( "Y/m/d" , $added );
	    return substr($nuevafecha,2,10);
	}

}


?>