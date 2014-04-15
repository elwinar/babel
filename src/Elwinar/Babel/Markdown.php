<?php namespace Elwinar\Babel;

use \Michelf\MarkdownExtra;

class Markdown
{
	public function string($string, $extra = true)
	{
		return MarkdownExtra::defaultTransform($string);
	}

	public function file($path, $extra = true)
	{
		return MarkdownExtra::defaultTransform(file_get_contents($path));
	}
}

?>