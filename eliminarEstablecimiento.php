<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
        $nombre = $_POST['nombre'];
		$db = @mysqli_connect('localhost','root','','parque_de_atracciones');
		if (!$db) {
		   printf(
		      'Error %d: %s.<br />',
		      mysqli_connect_errno(),mysqli_connect_error());
		}
		$sql= "DELETE FROM establecimientos WHERE nombre = '$nombre' ";
   		$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		echo "<h2>Se ha eliminado el establecimiento</h2>";
    	}
    	else{
    		echo "Ha habido un error al realizar la consulta<br>";
    		echo mysqli_error($db);
    	}
    	@mysqli_close($db);
?>
	<form action="establecimientos.php">
		<input type="submit" value = "Volver" >
	</form>
</body>
</html>