<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return 'mostrando fotos del usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearFoto()
	{
		return 'formulario de crear fotos';
	}
	public function postCrearFoto()
	{
		return 'almacenando foto';
	}
	public function getActualizarFoto()
	{
		return 'formulario de actualizar fotos';
	}
	public function postActualizarFoto()
	{
		return 'actualizar foto';
	}
	public function getEliminarFoto()
	{
		return 'formulario de eliminar fotos';
	}
	public function postEliminarFoto()
	{
		return 'eliminando foto';
	}
	public function missingMethod($parameters=array()){
		abort(404);
	}

}