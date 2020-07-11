<?php

namespace abstracts;

abstract class animals
{
	protected $owner;
	protected $legs;
	protected $age;

	public function __construct()
	{
		$this->owner = 'no name';
	}

	/**
	 * @return int
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * @param int $age
	 */
	public function setAge($age)
	{
		$this->age = $age;
	}

	/**
	 * @return int
	 */
	public function getLegs()
	{
		return $this->legs;
	}

	/**
	 * @param int $legs
	 */
	public function setLegs($legs)
	{
		$this->legs = $legs;
	}

	/**
	 * @return string
	 */
	public function getOwner()
	{
		return $this->owner;
	}

	/**
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		$this->owner = $owner;
	}


	public function render($data = [])
	{

		foreach ($data as $value) {
			echo $value . ' ';
		}
		echo '<br>';
	}

	abstract public function data();
}