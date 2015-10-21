<?php

class Model_Base
{
	/**
	 * Property db.
	 *
	 * @var PDO
	 */
	protected $db;

	public function __construct(PDO $db = null)
	{
		//Dependency Injection
		if ($db)
		{
			$this->db = $db;
		}
		else
		{
			$this->db = Factory::getDbo();
		}
	}
	
	public function setDb(PDO $db)
	{
		$this->db = $db;
	}

	public function getDb()
	{
		return $this->db;
	}

}