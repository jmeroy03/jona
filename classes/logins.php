<?php
Class Logins extends Database{
	
	public function login($account,$password){

		$conn = $this->dbConnect();
		$select = " SELECT * 
					FROM customers WHERE email='$account' AND password='$password'";
		
		$query = $conn->query($select);//word query() is defined
		$result = $query->fetchAll(PDO::FETCH_ASSOC);//fetchAll(PDO::FETCH_ASSOC) defined refer to wiki pdo
		
		$_SESSION['email']=$account;
		foreach($result as $row){ 
    		$_SESSION['email']=$account;
			$_SESSION['customerId']=$row['costumer_id'];
			$_SESSION['firstName']=$row['first_name'];
			$_SESSION['lastName']=$row['last_name'];
			$_SESSION['phone']=$row['phone'];
		}
		//return $result;
			
	}

}

?>