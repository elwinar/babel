<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\EngineInterface;

class TextileEngine implements EngineInterface
{
	public function get($path, array $data = array())
	{
		return Facades\Textile::file($path);
	}
}

?>