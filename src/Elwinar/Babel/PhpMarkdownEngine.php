<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\PhpEngine;
use Elwinar\Babel\Facades\Markdown;

class PhpMarkdownEngine extends PhpEngine
{
	public function get($path, array $data = array())
	{
		return Markdown::string(parent::get($path, $data));
	}
}

?>