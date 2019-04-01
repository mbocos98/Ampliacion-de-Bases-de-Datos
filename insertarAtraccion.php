<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parque de atracciones</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
		$nombre = $_POST['nombre'];
		$ubicacion = $_POST['ubicacion'];
		$estado = $_POST['estado'];
		$edadMinima = $_POST['edadMin'];
		$alturaMinima = $_POST['alturaMin'];
		$tematica = $_POST['tema'];

		$db = @mysqli_connect('localhost','root','','parque_de_atracciones');
		if ($db) {
		    echo 'Conexión realizada correctamente.<br />';
		}
		else {
		    printf(
		      'Error %d: %s.<br />',
		      mysqli_connect_errno(),mysqli_connect_error());
  		};
		$sql = "INSERT INTO atracciones (nombre, ubicacion, estado, edadMinima, alturaMinima, tematica) VALUES ('$nombre', '$ubicacion', '$estado', '$edadMinima', '$alturaMinima', '$tematica')";
    	$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		echo "Los datos se introdujeron correctamente";
    	}
    	else{
    		echo "Ha habido un error al realizar la consulta<br>";
    		echo mysqli_error($db);
    	}
    	@mysqli_close($db);
?>
	<form action="atracciones.php">
		<input type="submit" value = "Volver" >
	</form>

</body>
</html>