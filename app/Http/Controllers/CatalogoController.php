<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libro;

use Illuminate\Http\Request;
use Illuminate\Routings\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\DatabaseManager;

class CatalogoController extends Controller {

	public function index(Request $recuest)
	{
		
		$libros = Libro::filterAndPaginate(
							$recuest->get('titulo')	
							);

		return view('catalogo', compact('libros'));
	}


	public function create()
	{
		//
	}


	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}
