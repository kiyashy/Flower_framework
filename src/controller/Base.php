<?php 

class Controller_Base
{
	protected $input;

	public function __construct($input)
	{
		$this->input = $input;
	}

	protected function render($layout, $data = array())
	{
		$file = TEMPLATE . '/'. $layout. '.php';

		if (!file_exists(($file)))
		{
			throw new Exception('Template : ' . $file . 'not exist.', 500);
		}

		//Start render template
		//Output buffer
		ob_start();

		include $file;

		$output = ob_get_contents();

		ob_end_clean();

		return $output;
	}
}