<?php namespace Elwinar\Babel;

use Illuminate\View\Compilers\CompilerInterface;
use Illuminate\View\Engines\CompilerEngine;
use Elwinar\Babel\Facades\Textile;

class BladeTextileEngine extends CompilerEngine
{
	public function __construct(CompilerInterface $compiler)
	{
		parent::__construct($compiler);
	}

	public function get($path, array $data = array())
	{
		return Textile::string(parent::get($path, $data));
	}
}

?>