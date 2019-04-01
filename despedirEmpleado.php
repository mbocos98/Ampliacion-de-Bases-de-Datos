<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parque de atracciones</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
        $correo = $_POST['correo'];
		$db = @mysqli_connect('localhost','root','','parque_de_atracciones');
		if (!$db) {
		   printf(
		      'Error %d: %s.<br />',
		      mysqli_connect_errno(),mysqli_connect_error());
		}
		$sql= "DELETE FROM empleados WHERE correo = '$correo' ";
   		$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		echo "<h2>Se ha despedido al empleado</h2>";
    	}
    	else{
    		echo "Ha habido un error al realizar la consulta<br>";
    		echo mysqli_error($db);
    	}
    	@mysqli_close($db);
?>
	<form action="empleados.php">
		<input type="submit" value = "Volver" >
	</form>
</body>
</html>