<?php  
	require '../Controller/conexion_db.php';
	class AddData extends Conexion
	{
		public function AddData()
		{
			parent:: __construct();
		}
		public function CreateBBDD(){
			try{
				$sql2="CREATE DATABASE Usuarios"; 
				$this->conexion_db->query($sql2);				
				$this->conexion_db->query("Use Usuarios");
			}
			catch(Excepcion $e){
				echo "$e";
			}
		}
		public function CreateTable(){
			try{
				$this->conexion_db->query(basename('Usuarios'));
				$sql3="CREATE TABLE UsuariosFB (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30), lastname VARCHAR(100), email VARCHAR(100))"; 
				$this->conexion_db->query($sql3);
			}
			catch(Excepcion $e){
				echo "$e";			
			}
		}
		public function AddUser($firstname, $lastname, $email){
			$sql="INSERT INTO usuariosfb (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";		
			$resultado = $this->conexion_db->query($sql);
			$this->conexion_db->close();
		}
	}
?>