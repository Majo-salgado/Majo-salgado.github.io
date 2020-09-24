<?php
	
	session_start();
	require 'conexion pedido.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: pedido.php");
	}
	
	$sql = "SELECT * FROM persona";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
		$numero = mysqli_real_escape_string($mysqli,$_POST['numero']);
		$direccion = mysqli_real_escape_string($mysqli,$_POST['direccion']);
		
		
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO persona (nombre, numero, direccion) VALUES('$nombre','$numero','$direccion')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>