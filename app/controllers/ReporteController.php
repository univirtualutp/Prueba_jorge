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
			'adjunto'=>'max:4000',
			);
		$messages = array(
            'email' => 'Debe ser un email válido.',
            'alpha' => 'Por favor ingresar solo caracteres alfabeticos.',
            'required' => 'Campo requerido.',
            'max' => 'El tamaño del archivo no puede ser superior a 4MB.'
        );
		$validation = Validator::make(Input::all(),$rules,$messages);

		if ($validation->passes())
		{
			Mail::send('emails.reporte', Input::all(), function($message)
			{
				$message->subject(Input::get('asunto'));
    			$message->from('noreply@localhost', 'No-reply');
			    $message->to('soporteunivirtual@utp.edu.co');
			    if (Input::hasFile('adjunto'))
				{
				    $message->attach(Input::file('adjunto')->getRealPath());
				}
			});


			return Redirect::back()
			->with('successMessage','Su solicitud ha sido creada satisfactoriamente.');
			
		}

		return Redirect::back()
			->withErrors($validation)
			->with('errorMessage','Algo ha fallado, cambia algunas cosas e intenta de nuevo.')
			->withInput();
	}
}