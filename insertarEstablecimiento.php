<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Parque de atracciones</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
		$nombre = $_POST['nombre'];
		$ubicacion = $_POST['ubicacion'];
		$tipoPuesto = $_POST['tipo'];
		$horaApertura = $_POST['apertura'];
		$horaCierre = $_POST['cierre'];

		$db = @mysqli_connect('localhost','root','','parque_de_atracciones');
		if (!$db) {
		      printf(
		      'Error %d: %s.<br />',
		      mysqli_connect_errno(),mysqli_connect_error());
		}
		$sql = "INSERT INTO establecimientos (nombre, ubicacion, tipoComida, horaApertura, horaCierre) VALUES ('$nombre', '$ubicacion', '$tipoPuesto', '$horaApertura', '$horaCierre')";
    	$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		echo "<h1>Los datos del establecimiento se introdujeron correctamente</h1>";
    	}
    	else{
    		echo "<h1>Ha habido un error al realizar la consulta</h1>";
    		echo mysqli_error($db);
    	}
    	@mysqli_close($db);
?>
	<form action="establecimientos.php">
		<input type="submit" value = "Volver" >
	</form>
</body>
</html>