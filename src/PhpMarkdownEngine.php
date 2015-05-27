<?php namespace Babel;

use Illuminate\View\Engines\PhpEngine;

class PhpMarkdownEngine extends PhpEngine
{
	public function get($path, array $data = array())
	{
		return Facades\Markdown::string(parent::get($path, $data));
	}
}

?>