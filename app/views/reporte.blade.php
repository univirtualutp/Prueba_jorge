<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reportes de usuarios</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" ></script>
</head>
<body>

	<div class="container">
		@if( Session::has('successMessage'))
				<div class="alert alert-success alert-dismisable">
					<span class="glyphicon glyphicon-ok"></span>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  		{{ Session::get('successMessage') }}
				</div>
			@endif
			@if( Session::has('infoMessage'))
				<div class="alert alert-info alert-dismisable">
					<span class="glyphicon glyphicon-info-sign"></span>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  		{{ Session::get('infoMessage') }}
				</div>
			@endif
			@if( Session::has('warningMessage'))
				<div class="alert alert-warning alert-dismisable">
					<span class="glyphicon glyphicon-warning-sign"></span>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  		{{ Session::get('warningMessage') }}
				</div>
			@endif
			@if( Session::has('errorMessage'))
				<div class="alert alert-danger alert-dismisable">
					<span class="glyphicon glyphicon-exclamation-sign"></span>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  		{{ Session::get('errorMessage') }}
				</div>
			@endif
		
	</div>
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
		<li>
			{{Form::submit('Enviar') }}
		</li>
	</ul>

	{{ Form::close() }}
	
	<script>
	    $(document).on('ready',function(){
	        <?php 
	            foreach (array_keys($errors->toArray()) as $key => $value) { ?>
	                $('label[for="{{ $value }}"]').parent().addClass('has-error');
	            <?php }
	        ?>
	    });
	</script>

</body>
</html>