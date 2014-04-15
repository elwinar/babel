<?php namespace Elwinar\Babel;

use Illuminate\View\Compilers\CompilerInterface;
use Illuminate\View\Engines\CompilerEngine;
use \Michelf\MarkdownExtra;

class BladeMarkdownEngine extends CompilerEngine
{
	public function __construct(CompilerInterface $compiler)
	{
		parent::__construct($compiler);
	}

	public function get($path, array $data = array())
	{
		return MarkdownExtra::defaultTransform(parent::get($path, $data));
	}
}

?>