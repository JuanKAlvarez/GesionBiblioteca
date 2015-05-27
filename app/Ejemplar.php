<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model {

	public function libro()
    {
        return $this->belongsTo('Libro');
    }

}
