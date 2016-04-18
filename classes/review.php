<?php
 require '../jona/DbConnect/pdo.php';


class Review{
	protected $conn;
	private $productId;
	private $customerId;
	private $rating;
	private $titleReview;
	private $titleBody;

	public function __construct(){
		$db = new Database();
		$this->conn = $db->dbConnect();
	}

	public function addReview($rating,$titleReview,$titleBody){
		$insert = "INSERT INTO reviews (product_id, 
										customer_id, 
										datetime_posted,
										rating,
										review_title,
										review,
										delete_flag) 
					VALUES (productId, $customerId, 
							CURRENT_DATE(), 
							$rating, 
							$titleReview, 
							$titleBody, 
							'n')";
		
		$query = $this->conn->query($insert);
		
	}

	public function updateReview(){

	}

}
?>