<?php namespace Elwinar\Babel;

use Netcarver\Textile\Parser as TextileParser;

class Textile
{
	private $parser;

	public function __construct()
	{
		$this->parser = new TextileParser();
	}

	public function string($string)
	{
		return $this->parser->textileThis($string);
	}

	public function file($path)
	{
		return $this->parser->textileThis(file_get_contents($path));
	}
}

?>