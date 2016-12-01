<?php
	class Imagen{

		private $db;

		function __construct() {
			require_once '../db/db_connect.php';
			$this->db = new db_connect();
			$this->db->connect();
		}

		function __destruct() {}


	    private $sql;





	    public function imagenCreate($codigoImagen,$codigoProyecto,$nombreImagen){
	    	$sql = "
		    INSERT INTO imagenes (codigoImagen, codigoProyecto, nombreImagen) 
		    VALUES ('".$codigoImagen."','".$codigoProyecto."','".$nombreImagen."')
	    	";
			$result = mysqli_query($this->db->connect(), $sql);
			var_dump($result);

	    }




	}