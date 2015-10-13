<?php

class Controller_Flower
{
	protected $input;

	public function __construct($input)
	{
		$this->input = $input;
	}

	public function indexAction()
	{
		return 'INDEX';
	}

	public function editAction()
	{
		return 'INDEX';
	}
	
	public function saveAction()
	{
		return 'INDEX';
	}
}