<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\EngineInterface;
use \Michelf\MarkdownExtra;

class MarkdownEngine implements EngineInterface
{
	public function get($path, array $data = array())
	{
		return MarkdownExtra::defaultTransform(file_get_contents($path));
	}
}

?>