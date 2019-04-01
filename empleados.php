<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Empleados</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Añadir un/a nuev@ emplead@</h1>
	<form action="insertarEmpleado.php" method="post">
	<fieldset>
		<legend>Información sobre el/la emplead@</legend>
			Correo electrónico:<br> <input type="text" name="correo"><br>
			Nombre: <br> <input type="text" name="nombre"><br>
			Dirección: <br> <input type="text" name="direccion"><br>
			Fecha de nacimiento:<br> <input type="date" name="fechaNac"><br>	
			Puesto:
			<select name="puesto">
				<option>Mantenimiento</option>
				<option>Servicio de Jardineria</option>
				<option>Servicio de Limpieza</option>
				<option>Empleado de establecimiento</option>
				<option>Responsable de atraccion</option>
				<option>Secretari@</option>
				<option>Director</option>
			</select><br>
			Teléfono:<br> <input type="text" name="telefono"><br>
	</fieldset>
	<input type="submit" value="Insertar">	
	</form>
	<h1>Consultar los empleados del parque</h1>
	<?php
		require('listaEmpleados.php');
	?>
	<h1>Despedir a un empleado</h1>
	<form action="despedirEmpleado.php" method="post">
	Introduce el correo electrónico del empleado al que quieres despedir:<input type="text" name="correo">		
	<input type="submit" value="Despedir">	
	</form>

</body>
</html>