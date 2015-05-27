<?php 
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	use SoftDeletes;

	protected $table = 'users';
    protected $dates = ['deleted_at'];
	protected $fillable = ['name', 'email', 'password','type', 'descripcion', 'telefono', 'direccion'];
	protected $hidden = ['password', 'remember_token'];



	public function setPasswordAttribute($value)
	{
		if (! empty($value)) {
			
			$this->attributes['password'] = \Hash::make($value);
		}

	}

	public function isAdmin()
	{
		return  $this->type === 'admin';
	}

	public function is($type)
	{
		
		return  $this->type === $type;
	}
	
	public function scopeName($query , $name)
	{
		if (trim($name) != "" ) {
			
			$query->where("name" , "LIKE", "%$name%");
		}
	}

	public function scopeType($query , $type)
	{
		
		$types = config('options.types');

		if ($type != ""  &&  isset($types[$type])) {
			
			$query->where("type" , $type);
		}
	}

	public function scopeDescripcion($query , $descripcion)
	{
		$descripciones = config('options.descripcion');

		if ($descripcion != ""  &&  isset($descripciones[$descripcion])) {
			
			$query->where("descripcion" , $descripcion);
		}
	}

	public static function filterAndPaginate($name, $type, $descripcion)
	{
		
		return User::name($name)
					->type($type)
					->descripcion($descripcion)
					->paginate(10);
	}



}
