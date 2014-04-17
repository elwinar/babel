<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\PhpEngine;
use Elwinar\Babel\Facades\Textile;

class PhpTextileEngine extends PhpEngine
{
	public function get($path, array $data = array())
	{
		return Textile::string(parent::get($path, $data));
	}
}

?>