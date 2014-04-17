<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\EngineInterface;
use Elwinar\Babel\Facades\Markdown;

class MarkdownEngine implements EngineInterface
{
	public function get($path, array $data = array())
	{
		return Markdown::file($path);
	}
}

?>