<?php

require_once 'rectangle.php';

class Square extends Rectangle
{

	public function __construct($side)
	{
		parent::__construct($side, $side);
	}

	public function perimeter()
	{
		return $this->getHeight() * 2 + $this->getWidth() * 2;
	}

	public function area()
	{
		return $this->getHeight() * $this->getWidth();
	}

}