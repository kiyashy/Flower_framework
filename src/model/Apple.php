<?php 
//get
//
class Model_Apple extends Model_Base
{
	/**
	 * getApples
	 *
	 * @return  array
	 */
	public function getApples()
	{
		
		$sql = 'SELECT * FROM apples WHERE state=1';

		$stmt = $this->db->query($sql);

		$apples = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $apples;
	}

	public function create($data)
	{
		unset($data['id']);
		//Quote
		$data = array_map(function ($value){
			return '"' . $value . '"';
		}, $data);

		// Build SQL

		$sql = "INSERT INTO apples (title,  state, url, introtext) VALUES(" . implode(',', $data) .")";

		$this->db->query($sql);

		return true ;
	}
}	
?>
