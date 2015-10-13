<?php

class Input_Input {
	protected $request = array();

	public function __construct()
	{
		$this->request = array(
			'get' => $_GET,
			'post'=> $_POST,
			'request' => $_REQUEST,
			);
	}
	public function get ($name, $default = null , $method = 'get')
	{
		if (isset($this->request[$method][$name]))
		{
			return $this->request[$method][$name];
		}
		return $default;
	}
}