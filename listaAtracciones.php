<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Parque de atracciones</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
		$db = @mysqli_connect('localhost','root','','parque_de_atracciones');
		if (!$db) {
		   printf(
		      'Error %d: %s.<br />',
		      mysqli_connect_errno(),mysqli_connect_error());
		}
		$sql="SELECT * FROM atracciones";
   		$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		while($array = mysqli_fetch_array($consulta)){
    			echo "Nombre: ". $array['nombre']."<br>";
    			echo "Ubicación: ". $array['ubicacion']."<br>";
    			echo "Abierta/Cerrada: ". $array['estado']."<br>";
    			echo "Tematica: ". $array['tematica']."<br>";
    			echo "Edad Mínima: ". $array['edadMinima']."<br>";
    			echo "Altura Mínima: ". $array['alturaMinima']."<br>";
    			echo "------------------------------------------<br>";
    		}
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