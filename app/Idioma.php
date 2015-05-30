<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model {

	protected $table = 'idiomas';

	public function libro()
    {
        return $this->hasMany('App\Libro');
    }

}
