<?php

function load($class)
{

	$file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

	if (is_file($file)) {
		include($file);
		return true;
	} else {
		return false;
	}
}

spl_autoload_register('load');