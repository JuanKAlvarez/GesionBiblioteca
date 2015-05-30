<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model {

	protected $table = 'ejemplares';

	public function libro()
    {
        return $this->belongsTo('App\Libro');
    }

}
