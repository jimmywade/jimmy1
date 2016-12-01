<?php
	class Tema{

		private $db;

		function __construct() {
			require_once '../db/db_connect.php';
			$this->db = new db_connect();
			$this->db->connect();
		}

		function __destruct() {}


	    private $sql;

	    public function temaRead(){
			$sql = " 
			SELECT * FROM temas
			";
			$result = mysqli_query($this->db->connect(), $sql);
	        $rows = array();
				while($r = mysqli_fetch_array($result)){
	                $rows[] = $r;
		        }
		        echo json_encode($rows);
	    }


	    public function temaCreate(){
	    	$sql = "
		    INSERT INTO `proyectos` (`codigoProyecto`, `codigoTema`, `nombreProyecto`, `problemaProyecto`, `objetivoProyecto`, `especificoProyecto`, `actividadProyecto`, `resultadoProyecto`, `valorProyecto`, `beneficiarioProyecto`, `areaProyecto`) 
		    VALUES ('".$codigoProyecto."','".$codigoTema."','".$nombreProyecto."','".$problemaProyecto."','".$objetivoProyecto."','".$especificoProyecto."','".$actividadProyecto."','".$resultadoProyecto."','".$valorProyecto."','".$beneficiarioProyecto."','".$areaProyecto."')
	    	";

			$result = mysqli_query($this->db->connect(), $sql);
	    }


	}