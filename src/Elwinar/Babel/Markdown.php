<?php namespace Elwinar\Babel;

use \Illuminate\Filesystem\Filesystem;
use \Michelf\Markdown as MarkdownParser;
use \Michelf\MarkdownExtra as MarkdownExtraParser;

class Markdown
{
	public static function string($string, $extra = true)
	{
		if($extra) {
			return MarkdownExtraParser::defaultTransform($string);
		} else {
			return MarkdownParser::defaultTransform($string);
		}
	}

	public static function file($path, $extra = true)
	{
		if($extra) {
			return MarkdownExtraParser::defaultTransform(file_get_contents($path));
		} else {
			return MarkdownParser::defaultTransform(file_get_contents($path));
		}
	}
}

?>