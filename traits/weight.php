<?php
namespace traits;

trait weight
{
	protected $weight = '';

	public function weight($weight)
	{
		$weight = $this->weight = $weight;
		if (!is_int($weight)){
			die('Нужны не строковые значения');
		}else{
			return $weight;
		}

	}
}