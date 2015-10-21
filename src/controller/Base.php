<?php 

class Controller_Base
{
	/**
	 * Property input.
	 *
	 * @var Input_Input
	 */
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

		extract($data);

		//Start render template
		//Output buffer
		ob_start();

		include $file;

		$output = ob_get_contents();

		ob_end_clean();

		return $output;
	}
}