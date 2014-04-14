<?php namespace Elwinar\Babel;

use \Illuminate\Filesystem\Filesystem;
use \Michelf\MarkdownExtra;

class Markdown
{
	public static function string($string)
	{
		return MarkdownExtra::defaultTransform($string);
	}

	public static function file($path)
	{
		return MarkdownExtra::defaultTransform(Filesystem::get($path));
	}
}

?>