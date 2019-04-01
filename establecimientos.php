<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pedido</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Añadir un nuevo establecimiento</h1>
	<form action="insertarEstablecimiento.php" method="post">
	<fieldset>
		<legend>Información sobre el establecimiento</legend>
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
			Tipo de puesto: <select name="tipo">
				<option>Heladeria</option>
				<option>Hamburgueseria</option>
				<option>Perritos calientes</option>
				<option>Pizzeria</option>
				<option>Chuches</option>
				<option>Tienda de regalos</option>
			</select><br>
			Hora de apertura:<br> <input type="time"  min="10:00" max="13:00" name="apertura"><br>	
			Hora de cierre:<br> <input type="time"  min="18:00" max="20:00" name="cierre"><br>	
			Teléfono:<br> <input type="text" name="telefono"><br>	
			
	</fieldset>
	<input type="submit" value="Insertar">	
	</form>
	<h1>Ver los establecimientos del parque</h1>
	<?php
		require('listaEstablecimientos.php');
	?>
	<h1>Eliminar un establecimiento</h1>
	<form action="eliminarEstablecimiento.php" method="post">
	Introduce el nombre del establecimiento que quieres eliminar:<input type="text" name="nombre">		
	<input type="submit" value="Eliminar">	
	</form>

</body>
</html>