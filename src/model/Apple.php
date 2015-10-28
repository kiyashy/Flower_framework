<?php 

class Model_Apple extends Model_Base
{
	/**
	 * getApples
	 *
	 * @return  array
	 */
	public function getApples()
	{

		$sql = 'SELECT * FROM apples ';

		$stmt = $this->db->query($sql);

		$apples = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $apples;
	}

	/**
	 * getApple
	 *
	 * @return  array
	 */
	public function getApple($num)
	{

		$sql = "SELECT * FROM apples WHERE id='$num'";

		$stmt = $this->db->query($sql);

		$apple = $stmt->fetch(PDO::FETCH_ASSOC);

		return $apple;
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

	public function update($data)
	{
		//Quote
		// Build SQL
		$title = $data['title'];
		$intro = $data['introtext'];
		$url = $data['url'];
		$state = $data['state'];
		$id = $data['id'];

		$sql = "UPDATE apples SET title ='{$title}', url='{$url}',introtext='{$intro}',state='{$state}' WHERE id='{$id}'";

		$this->db->query($sql);

		return true ;
	}
}	
?>
