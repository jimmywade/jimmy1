<?php

	/*
	*  En esta clase php 'db_connect.php'
	*  nos conectaremos a la base de datos mediante la funcion
	*  connect(), utilizando las variables declaradas en la clase 'db_config.php'
	*/
	class db_connect {
		
		function __construct(){}

		function __destruct(){}


		public function connect() {
			require_once 'db_config.php';
			$connect = mysqli_connect(db_host, db_user, db_password) or die ('No se pudo conectar a la Base de Datos '.mysqli_error());
			mysqli_select_db($connect, db_database);
			return $connect;
		}

		public function disconnect(){
			mysqli_close();
		}
	}	
?>