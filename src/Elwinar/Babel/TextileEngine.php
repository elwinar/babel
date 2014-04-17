<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\EngineInterface;
use Elwinar\Babel\Facades\Textile;

class TextileEngine implements EngineInterface
{
	public function get($path, array $data = array())
	{
		return Textile::file($path);
	}
}

?>