<?php namespace Elwinar\Babel;

use Illuminate\View\Compilers\CompilerInterface;
use Illuminate\View\Engines\CompilerEngine;
use Elwinar\Babel\Facades\Markdown;

class BladeMarkdownEngine extends CompilerEngine
{
	public function __construct(CompilerInterface $compiler)
	{
		parent::__construct($compiler);
	}

	public function get($path, array $data = array())
	{
		return Markdown::string(parent::get($path, $data));
	}
}

?>