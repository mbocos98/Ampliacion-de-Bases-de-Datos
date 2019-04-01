<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Parque de atracciones</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
		$correo = $_POST['correo'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$fechaNacimiento = $_POST['fechaNac'];
		$puesto = $_POST['puesto'];
		$telefono = $_POST['telefono'];

		$db = @mysqli_connect('localhost','root','','parque_de_atracciones');
		if (!$db) {
		    printf(
		      'Error %d: %s.<br />',
		      mysqli_connect_errno(),mysqli_connect_error());
		}
		$sql = "INSERT INTO empleados (correo, nombre, direccion, fechaNacimiento, puesto, telefono) VALUES ('$correo', '$nombre', '$direccion', '$fechaNacimiento', '$puesto', '$telefono')";
    	$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		echo "Los datos se introdujeron correctamente";
    	}
    	else{
    		echo "Ha habido un error al realizar la consulta";
    		echo mysqli_error($db);
    	}
    	@mysqli_close($db);
?>
	<form action="empleados.php">
		<input type="submit" value = "Volver" >
	</form>
</body>
</html>