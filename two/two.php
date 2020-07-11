<?php
namespace two;
use abstracts\animals;
use traits\weight;
use interfaces\lower;

class two extends animals implements lower
{
	use weight;
	public $name = 'fish';

	public function tolower($data)
	{
		$data = mb_strtolower($data);
		return $data;
	}

	public function data()
	{
		return date('d:m:y');
	}
}