<?php
	class Proyecto{

		private $db;

		function __construct() {
			require_once '../db/db_connect.php';
			$this->db = new db_connect();
			$this->db->connect();
		}

		function __destruct() {}


	    private $sql;

	    public function proyectoRead(){
			$sql = " 
			SELECT * FROM participantes,proyectos,temas,imagenes,estudiantes,instituciones,ciudades,paises
			WHERE participantes.liderParticipante = 1
			AND participantes.codigoProyecto = proyectos.codigoProyecto
			AND temas.codigoTema = proyectos.codigoTema
			AND proyectos.codigoProyecto = imagenes.codigoProyecto
			AND participantes.codigoEstudiante = estudiantes.codigoEstudiante
			AND estudiantes.codigoInstitucion = instituciones.codigoInstitucion
			AND instituciones.codigoCiudad = ciudades.codigoCiudad
			AND instituciones.codigoPais = paises.codigopais
			AND proyectos.estadoProyecto = 1
			ORDER BY fechaProyecto DESC
			";
			$result = mysqli_query($this->db->connect(), $sql);
	        $rows = array();
				while($r = mysqli_fetch_array($result)){
	                $rows[] = $r;
		        }
		        echo json_encode($rows);
	    }




	    public function proyectoCreate(
			$codigoProyecto,
			$codigoTema,
			$nombreProyecto,
			$problemaProyecto,
			$objetivoProyecto,
			$especificoProyecto,
			$actividadProyecto,
			$resultadoProyecto,
			$beneficiarioProyecto,
			$areaProyecto,
			$valorProyecto,
			$duracionProyecto){
	    	$sql = "
		    INSERT INTO proyectos (codigoProyecto, codigoTema, nombreProyecto, problemaProyecto, objetivoProyecto, especificoProyecto, actividadProyecto, resultadoProyecto, beneficiarioProyecto, areaProyecto, valorProyecto, duracionProyecto) 
		    VALUES ('".$codigoProyecto."','".$codigoTema."','".$nombreProyecto."','".$problemaProyecto."','".$objetivoProyecto."','".$especificoProyecto."','".$actividadProyecto."','".$resultadoProyecto."','".$beneficiarioProyecto."','".$areaProyecto."','".$valorProyecto."','".$duracionProyecto."')
	    	";
	    	
			$result = mysqli_query($this->db->connect(), $sql);
			var_dump($result);
	    }




		public function proyectoUpdate($codigoProyecto,$nombreProyecto,$codigoTema,$problemaProyecto,$objetivoProyecto,$especificoProyecto,$resultadoProyecto,$actividadProyecto,$beneficiarioProyecto,$areaProyecto,$valorProyecto,$duracionProyecto){
			$sql = "
			UPDATE proyectos
            SET nombreProyecto='$nombreProyecto',
                codigoTema='$codigoTema',
                problemaProyecto='$problemaProyecto',
                objetivoProyecto='$objetivoProyecto',
                especificoProyecto='$especificoProyecto',
                resultadoProyecto='$resultadoProyecto',
                actividadProyecto='$actividadProyecto',
                beneficiarioProyecto='$beneficiarioProyecto',
                areaProyecto='$areaProyecto',
                valorProyecto='$valorProyecto',
                duracionProyecto='$duracionProyecto'
			WHERE codigoProyecto='$codigoProyecto'
	    	";

			$result = mysqli_query($this->db->connect(), $sql);
			var_dump($result);
		}



		public function proyectoDelete($codigoProyecto){
			$sql = "
			UPDATE proyectos
            SET estadoProyecto='0'
			WHERE codigoProyecto='$codigoProyecto'
	    	";

			$result = mysqli_query($this->db->connect(), $sql);
			var_dump($result);
		}






	    public function imageUpdate($codigoImagen,$nombreImagen){
	        $sql = " UPDATE imagenes
	        SET nombreImagen='$nombreImagen'
	        WHERE codigoImagen='$codigoImagen'
			";
			$result = mysqli_query($this->db->connect(), $sql);
			
	        $rows = array();
	        if($result==true){
	        	$r['success']=1;
				$r['inserted']=true;
	        }else{
	        	$r['success']=0;
				$r['inserted']=false;
	        }

		    echo json_encode($rows);
	    }



	}