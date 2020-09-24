
<?php
	
	session_start();
	require 'conexion pedido.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: pedido.php");
	}
	
	$sql = "SELECT * FROM pedido1";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
		$pedido = mysqli_real_escape_string($mysqli,$_POST['pedido']);
		$direccion = mysqli_real_escape_string($mysqli,$_POST['direccion']);
		
		
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO pedido1 (nombre, pedido, direccion) VALUES('$nombre','$pedido','$direccion')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>