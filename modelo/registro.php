<?php

require_once "../conexion/conexion.php";

	class Registrar{				
		var $conn;
		var $conexion;
		function Registrar(){		
			$this->conexion = new  Conexion();				
			$this->conn=$this->conexion->conectarse();
		}
					
		function registrarNuevoUsuario($usuario, $contrasena, $rol){
			$query="insert into usuarios_javame (usuario, password, rol) values('".$usuario."','".$contrasena."','".$rol."')";
			$resultado=mysqli_query($this->conn, $query);
			if($resultado){
				echo "Dato insertado correctamente.";
			}
			else{
				//echo "Dato no insertado: ".die(mysqli_error());
				echo "Dato no insertado";
			}
		}
	}
?>