<?php
class Application {
	protected $input;

	public function execute()
	{

		$this->init();

		$controller = $this->routine();

		$output = $this->render($controller);

		$this->respond($output);
	}

	//init some liabery
	public function init()
	{
		spl_autoload_register(function($class)
		{
			$file = __DIR__ . '/src/' . str_replace('_', '/' , $class). '.php';
			if (file_exists($file))
			{
				require_once $file;
			}
		});

		$this->input = new Input_Input;
	}

	// Which controller to execute
	public function routine()
	{
		$controller = $this->input->get('controller');

		$class = 'Controller_'. ucfirst($controller);

		if (!class_exists($file))
		{
			throw new Exception('Controller not found', 404);
		}
		//echo $file;
		require_once $file;

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


$app = new Application;
$app->execute();