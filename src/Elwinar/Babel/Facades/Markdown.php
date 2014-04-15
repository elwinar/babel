<?php namespace Elwinar\Babel\Facades;

use Illuminate\Support\Facades\Facade;

class Markdown extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'babel.markdown';
	}

}

?>