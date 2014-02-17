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
		<div class="row">
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

	<div class="row">
		{{ Form::open(array('route' => 'reporte.store')) }}
	    
		
			<div class="form-group">
				<label class="control-label" for="nombre">Nombre</label>
				<input type="text" id="nombre" name="nombre">
			</div>
			<div class="form-group">
				<label class="control-label" for="apellidos">Apellidos</label>
				<input type="text" id="apellidos" name="apellidos"></div>
			<div class="form-group">
				<label class="control-label" for="email">Email</label>
				<input type="text" id="email" name="email">
			</div>
			<div class="form-group">
				<label class="control-label" for="asunto">Asunto</label>
				<input type="text" id="asunto" name="asunto">
			</div>
			<div class="form-group">
				<label class="control-label" for="descripcion">Descripción</label>
				<textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
			</div>
			<div class="form-group">
				<label class="control-label" for="adjuntos">Adjuntos</label>
				<input type="file" id="adjuntos[]" name="adjuntos[]">
			</div>
			<div class="form-group">
				{{Form::submit('Enviar') }}
			</div>
		
		{{ Form::close() }}
	</div>
	
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