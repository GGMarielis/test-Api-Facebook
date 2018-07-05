<?php 
	require "config_db.php";
	class Conexion
	{
		protected $conexion_db;
		public function Conexion()
		{
			$this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if ($this->conexion_db->connect_errno) {
				echo "Fallo de conexion de base de datos" . $this->conexion_db->connect_error;
				return;	
			}			
			$this->conexion_db->set_Charset(DB_CHARSET);
		}
	}
?>