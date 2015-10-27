<?php


// REQUIRE 將定義路徑檔匯入
require_once __DIR__ . '/src/define.php';

// 自動載入 class

spl_autoload_register(function($class)
{
	/**
	 * require root/src/class.php
	 */
	$file = ROOT . '/src/' . str_replace('_', '/' , $class). '.php';
	if (file_exists($file))
	{
		require_once $file;
	}
});

// 創建物件 -> 執行
$app = new Application;
$app->execute();