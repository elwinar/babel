<?php namespace Babel;

use Illuminate\View\Engines\EngineInterface;

class MarkdownEngine implements EngineInterface
{
	public function get($path, array $data = array())
	{
		return Facades\Markdown::file($path);
	}
}

?>