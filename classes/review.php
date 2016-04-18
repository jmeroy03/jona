<?php
 require_once "../jona/DbConnect/pdo.php";


class Review{
	protected $conn;
	private $productId;
	private $customerId;
	public $rating;
	public $titleReview;
	public $titleBody;

	public function __construct(){
		$db = new Database();
		$this->conn = $db->dbConnect();
	}

	public function addReview($rating,$titleReview,$titleBody){
		$sql = "INSERT INTO movies(filmName,
            filmDescription,
            filmImage,
            filmPrice,
            filmReview) VALUES (
            :filmName, 
            :filmDescription, 
            :filmImage, 
            :filmPrice, 
            :filmReview)";
                                          
			$stmt = $pdo->prepare($sql);
                                              
			$stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
			$stmt->bindParam(':filmDescription', $_POST['filmDescription'], PDO::PARAM_STR); 
			$stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
		// use PARAM_STR although a number  
			$stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
			$stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
                                      
			$stmt->execute(); 






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

	public function listReview($rating,$titleReview,$titleBody){
		$reviews = "SELECT rating,review_title,review
					FROM reviews";
		$query = $this->conn->query($reviews);
		$result = $query->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

}
?>