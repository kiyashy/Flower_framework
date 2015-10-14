<?php

class Controller_Flower extends Controller_Base
{
	public function indexAction()
	{
		$content = $this->input->get('content', 'Pirates');
		$model = new Model_Apple;
		$apples = $model->getApples();
		Helper::show($apples);

		return $this->render('flower/default', array(
			'content' => $content));
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