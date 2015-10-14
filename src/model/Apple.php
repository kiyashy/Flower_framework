<?php 
//get
//
class Model_Apple extends Model_Base
{
	public function getApples()
	{
		
		$sql = 'SELECT * FROM apples WHERE state=1';

		$stmt = $this->db->query($sql);

		$apples = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $apples;
	}
}	
?>
