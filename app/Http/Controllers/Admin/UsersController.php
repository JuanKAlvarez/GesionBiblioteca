<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routings\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class UsersController  extends Controller {



	public function index()
	{
		$users = User::paginate(10);
		return view('admin.usuarios', compact('users'));
	}

	public function store(Request $recuest)
	{

 		$user = new User($recuest->all());
		$user->save();
		return redirect()->back();

	}

	public function update($id, Request $recuest)
	{
		$user = User::findOrFail($id);
		$user->fill($recuest->all());
		$user->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		
		return redirect()->back();
	}


	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');
		
		return redirect()->back();

	}

}
