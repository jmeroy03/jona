<?php

	//var_dump($database_conn);
//require_once "{$_SERVER['HTTP_HOST']}/jona/DBConnect/pdo.php";
require_once 'DBConnect/pdo.php';


class Customer{

	protected $conn;

	public function __construct(){
		$db = new Database();
		$this->conn = $db->dbConnect();
	}

	public function list_customer($account,$password){
		$select = " SELECT *
					FROM customers WHERE email='$account' AND password='$password'";

		$query = $this->conn->query($select);//word query() is defined
		$result = $query->fetchAll(PDO::FETCH_ASSOC);//fetchAll(PDO::FETCH_ASSOC) defined refer to wiki pdo


		foreach ($result as $row) {
			//var_dump($list);
			$_SESSION['customerID']=$row['first_name'];
			$_SESSION['phone']=$row['phone'];
			echo $row['first_name'].' '.$row['last_name'] .$row['phone'].'<br>';
			//header("Location: index.php");
		}
	}

	public function getCustomer($account, $password){
		$select = "SELECT *
					FROM customers WHERE email='$account' AND password='$password'";

		$query = $this->conn->query($select);//word query() is defined
		$customer = $query->fetch(PDO::FETCH_ASSOC);//fetch single row
		return $customer;
	}
} //class
?>
