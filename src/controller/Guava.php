<?php
/**
 * Part of practice_flower project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

/**
 * The Guava class.
 *
 * @since  {DEPLOY_VERSION}
 */
class Controller_Guava extends Controller_Base
{
	/**
	 * indexAction
	 *
	 * @return  string
	 *
	 * @throws Exception
	 */
	public function indexAction()
	{
		//拿出資料
		$model = new Model_Apple();
		$apples = $model->getApples();
		//RENDER
		return $this->render('apple/index', array('apples' => $apples));
	}

	/**
	 * editAction
	 *
	 * @return  string
	 */
	public function editAction()
	{
		return $this->render('apple/form');
	}

	public function saveAction()
	{
		$data = array();
		Helper::show($_POST);
		$data['id']           = $this->input->get('id');
		$data['title']        = $this->input->get('title');
		$data['state']        = $this->input->get('state');
		$data['url']          = $this->input->get('url');
		$data['introtext']    = $this->input->get('introtext');

		//new MODEL
		$model = new Model_Apple();

		//確認id是否存在
		if(!$data['id'])
		{
			$model->create($data);
		}
		else
		{
			$model->update($data);
		}
		$this->redirect('index.php?controller=Guava');

	}

	public function redirect($url)
	{
		header('Location: '. $url);
	}

	public function updateAction()
	{
		$arr = $_GET;
		$model = new Model_Apple();
		$apple = $model->getApple($arr['input']);
//		echo Helper::show($apple);
		return $this->render('apple/formEdit', array('apple' => $apple));
	}

}
