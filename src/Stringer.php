<?php namespace RezaAr\Stringer;

class Stringer
{
	protected $string;

	public function __construct($string)
	{
		$this->string = $string;
	}

	public function reverse()
	{
		$this->string = strrev($this->string);

		return $this;
	}

	public function display()
	{
		return $this->string;
	}
}