<?php

class ReporteController extends \BaseController {

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('reporte');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'nombre'=>'required|alpha',
			'apellidos'=>'required|alpha',
			'email'=>'required|email',
			'asunto'=>'required',
			'descripcion'=>'required',
			'adjuntos'=>'size:4000',
			);
		$messages = array(
            'email' => 'Debe ser un email válido.',
            'alpha' => 'Por favor ingresar solo caracteres alfabeticos.',
            'required' => 'Campo requerido.',
            'size' => 'El tamaño del archivo no puede ser superior a 4MB.'
        );
		$validation = Validator::make(Input::all(),$rules,$messages);

		if ($validation->passes())
		{
			
		}

		return Redirect::back()
			->withErrors($validation)
			->with('errorMessage','Algo falló.')
			->withInput();
	}

	}

}