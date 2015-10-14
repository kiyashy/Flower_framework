<?php

class Controller_Flower extends Controller_Base
{
	public function indexAction()
	{
		$content = $this->input->get('content', 'Pirates');

		$db = Factory::getDbo();
		
		$sql = 'SELECT * FROM apples WHERE state=1';

		$stmt = $db->query($sql);

		$apples = $stmt->fetchAll(PDO::FETCH_ASSOC);

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