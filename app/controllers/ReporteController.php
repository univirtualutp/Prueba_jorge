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
	}

}