<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Nueva solicitud</h2>
		<p>Señor administrador hay una nueva solicitud en el sistema. A continuacion estan los detalles</p>
		<table>
			<tr>
				<td>Nombre</td>
				<td>{{$nombre}}</td>
			</tr>
			<tr>
				<td>Apellidos</td>
				<td>{{$apellidos}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$email}}</td>
			</tr>
			<tr>
				<td>Asunto</td>
				<td>{{$asunto}}</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>{{$descripcion}}</td>
			</tr>
		</table>
	</body>
</html>