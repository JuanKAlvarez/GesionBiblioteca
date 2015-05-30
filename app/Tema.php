<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model {

	protected $table = 'temas';

	public function libro()
    {
        return $this->hasMany('App\Libro');
    }

}
