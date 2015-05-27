<?php namespace Babel;

use Michelf\MarkdownExtra;

class Markdown
{
	public function string($string)
	{
		return MarkdownExtra::defaultTransform($string);
	}

	public function file($path)
	{
		return MarkdownExtra::defaultTransform(file_get_contents($path));
	}

	public function trans()
	{
		return $this->string(call_user_func_array('trans', func_get_args()));
	}
}

?>