<?php namespace Babel;

use Illuminate\View\Engines\PhpEngine;

class PhpTextileEngine extends PhpEngine
{
	public function get($path, array $data = array())
	{
		return Facades\Textile::string(parent::get($path, $data));
	}
}

?>