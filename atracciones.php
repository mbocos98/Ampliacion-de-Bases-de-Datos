<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Atracciones</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Insertar una nueva atracción</h1>
	<form action="insertarAtraccion.php" method="post">
	<fieldset>
		<legend>Información sobre la atracción</legend>
			Nombre:<br> <input type="text" name="nombre"><br>
			Ubicación: 
			<select name="ubicacion">
				<option>Entrada</option>
				<option>Zona infantil</option>
				<option>Zona juvenil</option>
				<option>Zona adulta</option>
				<option>Zona familiar</option>
				<option>Zona central</option>
			</select><br>
			Abierta/Cerrada:
			<select name="estado">
				<option>Abierta</option>
				<option>Cerrada</option>
			</select><br>
			Temática:<br> <input type="text" name="tema"><br>	
			Edad mínima:<br> <input type="text" name="edadMin"> años<br>
			Altura mínima:<br> <input type="text" name="alturaMin"> cm<br>
	</fieldset>
	<input type="submit" value="Insertar">	
	</form>
	<h1>Consultar las atracciones del parque</h1>

	<?php
		require('listaAtracciones.php');
	?>
	<h1>Eliminar una atracción del parque</h1>
	<form action="eliminarAtraccion.php" method="post">
	Introduce el nombre de la atracción que quieres eliminar del parque:<input type="text" name="nombre">		
	<input type="submit" value="Eliminar">	
	</form>

</body>
</html>