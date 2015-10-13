<?php

require_once __DIR__ . '/src/define.php';

spl_autoload_register(function($class)
{
	$file = ROOT . '/src/' . str_replace('_', '/' , $class). '.php';
	if (file_exists($file))
	{
		require_once $file;
	}
});

$app = new Application;
$app->execute();