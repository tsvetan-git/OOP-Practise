<?php
spl_autoload_register(function ($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php' ;
	require_once __DIR__ . '/classes/'. DIRECTORY_SEPARATOR . $class;
});