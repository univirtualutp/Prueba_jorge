<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reportes de usuarios</title>
</head>
<body>
	{{ Form::open(array('route' => 'reporte.store')) }}
    
	<ul>
		<li><label for="nombre">Nombre</label>
			<input type="text" id="nombre" name="nombre">
		</li>
		<li>
			<label for="apellidos">Apellidos</label>
			<input type="text" id="apellidos" name="apellidos"></li>
		<li>
			<label for="email">Email</label>
			<input type="text" id="email" name="email">
		</li>
		<li>
			<label for="asunto">Asunto</label>
			<input type="text" id="asunto" name="asunto">
		</li>
		<li>
			<label for="descripcion">Descripción</label>
			<textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
		</li>
		<li>
			<label for="adjuntos">Adjuntos</label>
			<input type="file" id="adjuntos[]" name="adjuntos[]">
		</li>
	</ul>

	{{ Form::close() }}


</body>
</html>