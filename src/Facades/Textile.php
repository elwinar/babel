<?php namespace Babel\Facades;

use Illuminate\Support\Facades\Facade;

class Textile extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'babel.textile';
	}

}

?>