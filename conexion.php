<?php


	/*
	if(isset($_POST['Nombre']) || isset($_POST['Apellido']) ||isset($_POST['Correo']) ||isset( $_POST['Telefono']) ||isset($_POST['Ciudad']) ||isset($_POST['Mensaje']))
	{	$Nombre = $_POST['Nombre'];
		$Apellido = $_POST['Apellido'];
		$Correo = $_POST['Correo'];
		$Telefono = $_POST['Telefono'];
		$Ciudad = $_POST['Ciudad'];
		$Mensaje = $_POST['Mensaje'];

	
	}
	*/
	/*
	$conn = new mysqli('localhost','root','','registro_datos_nuevo');
	mysqli_query($conn,"SET CHARACTER SET 'utf8'");
	mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO registro_datos_nuevo (Nombre, Apellido, Correo, Telefono, Ciudad, Mensaje) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $Nombre, $Apellido, $Correo, $Telefono, $Ciudad, $Mensaje);
		$execval = $stmt->execute();
		echo $execval;
		
		echo "<script>alert('Gracias por llenar tus datos');location.href ='javascript:history.back()';</script>";
		
		
		$stmt->close();
		$conn->close();
	}
	*/
	echo "<script>alert('Gracias por llenar tus datos');</script>";
	include "index.php";

	
?>
