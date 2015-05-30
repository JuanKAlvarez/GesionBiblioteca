<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model {

	protected $table = 'libros';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['isbn', 'titulo', 'edision','paginas', 'año', 'ubicacion_id', 'editorial_id', 'autor_id', 'tema_id', 'idioma_id'];

	


	public function ejemplar()
    {
        return $this->hasMany('App\Ejemplar');
    }

    public function editorial()
    {
        return $this->belongsTo('App\Editorial');
    }

    public function autor()
    {
        return $this->belongsTo('App\Autor');
    }

    public function tema()
    {
        return $this->belongsTo('App\Tema');
    }

    public function idioma()
    {
        return $this->belongsTo('App\Idioma');
    }





	public function scopeTitulo($query , $titulo)
	{
		if (trim($titulo) != "" ) {
			
			$query->where("titulo" , "LIKE", "%$titulo%");
		}
	}


	public function getUbicasion()
	{
		$ubicasion = \BD::table('libros')
						->join('libros','libro.id','=','ejemplares.id');

		
	}

	public function getEditorial()
	{
		return	$editorial;
	}

	public function getTema()
	{
		return	$tema;
	}

	public function getAutor()
	{
		return	$autor;
	}

	public function getIdioma()
	{
		return	$idioma;
	}

	public static function filterAndPaginate($titulo)
	{
		
		return Libro::titulo($titulo)

					->paginate(10);
	}


}
