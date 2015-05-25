<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsAdmin {

	private $auth;

	public function __construct(Guard $auth ) {
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		

		if ($this->auth->user()->type != 'admin') {
			
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('home');
			}
		}



		return $next($request);
	}

}
