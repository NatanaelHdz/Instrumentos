<?php namespace App\Controllers;

class InstrumentoController extends BaseController
{
	public function index()
	{
		$vistas = view('Plantilla/header').
				  view('Plantilla/nav').
				  view('Plantilla/imagenes').
				  view('Pagina/index').
				  view('Plantilla/footer');
		return $vistas;
	}

	public function bateria()
	{
		$vistas = view('Plantilla/header').
				  view('Plantilla/nav').
				  view('Pagina/bateria').
				  view('Plantilla/footer');
		return $vistas;
	}
	public function piano()
	{
		$vistas = view('Plantilla/header').
				  view('Plantilla/nav').
				  view('Pagina/piano').
				  view('Plantilla/footer');
		return $vistas;
	}
	public function bajo()
	{
		$vistas = view('Plantilla/header').
				  view('Plantilla/nav').
				  view('Pagina/bajo').
				  view('Plantilla/footer');
		return $vistas;
	}
	public function tecla()
	{
		$vistas = view('Plantilla/header').
				  view('Plantilla/nav').
				  view('Pagina/tecla').
				  view('Plantilla/footer');
		return $vistas;
	}
	/*public function guitar()
	{
		$vistas = view('Plantilla/header').
				  view('Plantilla/nav').
				  view('Pagina/guitar').
				  view('Plantilla/footer');
		return $vistas;
	}*/


}
