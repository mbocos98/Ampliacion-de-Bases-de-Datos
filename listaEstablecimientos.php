<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
		$sql="SELECT * FROM establecimientos";
   		$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		while($array = mysqli_fetch_array($consulta)){
    			echo "Nombre: ". $array['nombre']."<br>";
    			echo "Ubicación: ". $array['ubicacion']."<br>";
    			echo "Tipo de puesto: ". $array['tipoComida']."<br>";
                $tipo = $array['tipoComida'];
    			echo "Hora de apertura: ". $array['horaApertura']."<br>";
    			echo "Hora de cierre: ". $array['horaCierre']."<br>";
    			echo "Teléfono: ". $array['telefono']."<br>";
                $sql2 = "SELECT * FROM preciosmedios WHERE tipoComida = '$tipo'";
                $consulta2 = mysqli_query($db,$sql2);
                if($consulta2){
                    if($result = mysqli_fetch_array($consulta2))
                        echo "Precio Medio: ". $result['precioMedio']."<br>";
                }
                echo "------------------------------------------<br>";
    		}

    	}
    	else{
    		echo "Ha habido un error al realizar la consulta<br>";
    		echo mysqli_error($db);
    	}
    	@mysqli_close($db);
?>
</body>
</html>