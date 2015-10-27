<?php

class Application {
	/**
	 * Property input.
	 *
	 * @var Input_Input
	 */
	protected $input;


	//main executer for the whole app.
	public function execute()
	{
		// step1. INIT 最初建置
		$this->init();
		// step2. ROUTINE
		$controller = $this->routine();
		// step3. RENDER
		$output = $this->render($controller);
		// step4. VIEW
		$this->respond($output);
	}

	//init some liabery
	public function init()
	{
		$this->input = new Input_Input;
}

	// Which controller to execute
	public function routine()
	{
		// what does this mean ?
		$controller = $this->input->get('controller');
		$class = 'Controller_'. ucfirst($controller);

		if (!class_exists($class))
		{
			throw new Exception('Controller not found', 404);
		}
		
		$controller = new $class($this->input);

		return $controller;
	}

	// Render application
	public function render($controller)
	{
		$action = $this->input->get('action','index');

		$action = $action. 'Action';

		if(!method_exists($controller, $action))
		{
			throw new Exception('Action'.$action. ' not found in '. get_class($controller), 404);
		}

		echo $controller->$action();
	}

	// Respond HTML to browser
	public function respond($output)
	{
		echo $output;
	}
}