<?php 
	require "../modelo/consulta.php";
	require "../modelo/registro.php";
	$objConsulta = new Consulta();
	$objRegistrar = new Registrar();
	
	if(isset($_GET["iniciar_sesion"])){
		$usuario = $_GET['user']; //capturamos los datos recibidos desde el codigo java
		$password = $_GET['password'];
		$rol = $_GET['rol'];
		$objConsulta->inciarSesion($usuario, $password, $rol);	
	}
	
	if(isset($_GET["registrar_usuario"])){
		$usuario = $_GET['usuario'];
		$password = $_GET['contrasena'];
		$rol = $_GET['rol'];
		$objRegistrar->registrarNuevoUsuario($usuario, $password, $rol);	
	}
?>