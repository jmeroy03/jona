<?php
require_once 'DBConnect/pdo.php';

class Product{
	private $conn;

	public function __construct(){
		$db = new Database();
		$this->conn = $db->dbConnect();
	}

	public function getProducts(){
		$select = " SELECT *
					FROM products";

		$query = $this->conn->query($select);//word query() is defined
		$result = $query->fetchAll(PDO::FETCH_ASSOC);//fetchAll(PDO::FETCH_ASSOC) defined refer to wiki pdo

		return $result;
	}
}

?>
