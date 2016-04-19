<?php

require 'classes/customer.php';

class Customers{

	public function login(){
		if(isset($_POST['logIn'])){
			$account=$_POST['email'];
			$password=$_POST['password'];

			$customer = new Customer();
	 		$user = $customer->getCustomer($account,$password);
			if ($user){
				$_SESSION['user'] = $user;
				header ('Location: index.php');
			}else{
				header ('Location: index.php?r=error');
			}
		}
	}

	public function logout(){
		unset($_SESSION['user']);
	}

}
?>
