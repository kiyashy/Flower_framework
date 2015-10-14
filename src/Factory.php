<?php

/**
* 
*/
class Factory
{
	protected static $instances = array();
	
	//Singleton
	public static function getDbo()
	{
		if (!isset(static::$instances['dbo']))
		{
			static::$instances['dbo'] = new PDO('mysql:host=localhost;dbname=flower', 'root', '1234'); // new PDO
		}
		return static::$instances['dbo'];
	}

}