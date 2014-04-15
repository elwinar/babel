<?php namespace Elwinar\Babel;

use Illuminate\View\Engines\PhpEngine;
use \Michelf\MarkdownExtra;

class PhpMarkdownEngine extends PhpEngine
{
	public function get($path, array $data = array())
	{
		return MarkdownExtra::defaultTransform(parent::get($path, $data));
	}
}

?>