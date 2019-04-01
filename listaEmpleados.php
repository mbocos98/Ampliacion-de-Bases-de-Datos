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
		$sql="SELECT * FROM empleados";
   		$consulta=mysqli_query($db, $sql);
    	if($consulta){
    		while($array = mysqli_fetch_array($consulta)){
    			echo "Correo Electrónico: ". $array['correo']."<br>";
    			echo "Nombre: ". $array['nombre']."<br>";
    			echo "Dirección: ". $array['direccion']."<br>";
    			echo "Fecha de Nacimiento: ". $array['fechaNacimiento']."<br>";
    			echo "Puesto: ". $array['puesto']."<br>";
                $puesto = $array['puesto'];
    			echo "Teléfono: ". $array['telefono']."<br>";
                $sql2 = "SELECT * FROM salarios WHERE puesto = '$puesto'";
                $consulta2 = mysqli_query($db,$sql2);
                if($consulta2){
                    if($result = mysqli_fetch_array($consulta2))
                        echo "Salario: ". $result['salario']."<br>";
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