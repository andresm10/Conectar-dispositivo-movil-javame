<?php
require_once "../conexion/conexion.php";

	class Consulta{				
		var $conn;
		var $conexion;
		function Consulta(){		
			$this->conexion = new  Conexion();				
			$this->conn=$this->conexion->conectarse();
		}
					
		function inciarSesion($usuario, $contrasena, $rol){
			$query = "select * from usuarios_javame where usuario='".$usuario."' and password= '".$contrasena."' and rol = '".$rol."'";	
			$resultado = mysqli_query($this->conn, $query);
			if(mysqli_num_rows($resultado)<1){
				echo "Usuario incorrecto";
			}else{
				while($dato = mysqli_fetch_row($resultado)){
					echo $dato[0]."|".$dato[1]."|".$dato[2]."|";
				}
			}
		}
	}
?>