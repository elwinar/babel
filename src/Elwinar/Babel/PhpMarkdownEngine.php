<?php namespace Elwinar\Babel;

use Illuminate\View\Exception;
use Illuminate\View\Environment;
use Illuminate\View\Engines\PhpEngine;
use \Michelf\MarkdownExtra;

class PhpMarkdownEngine extends PhpEngine
{
	public function get($path, array $data = array())
	{
		return MarkdownExtra::defaultTransform($this->evaluatePath($path, $data));
	}
}

?>