<?php
class Database {

		public function dbConnect(){
			try{
				$database_conn = new PDO('mysql:host=localhost;dbname=jona;charset=utf8mb4','root','');
				return $database_conn;
			}catch(PDOException $e){
				echo 'Unable to connect to database!';
				return NULL;
			}
		}


}

	/*$username = 'developer';
	$password = 'Dri@2016';*/



	//var_dump($db);





/*class pdo{
	private $conn;
	private $host;
	private $user;
	private $password;
	private $baseName;
	private $port;
	private $Debug;

    function __construct() {
		$this->conn = false;
		$this->host = 'localhost'; //hostname
		$this->user = 'developer'; //username
		$this->password = 'Dri@2016'; //password
		$this->baseName = 'jona'; //name of your database
		$this->connect();
	}

	function connect(){
		if($this->conn){
			try {
				$this->conn = new PDO('mysql:host='.$this->host. ';dbname='.$this->baseName.'',$this->user,$this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
				var_dump($this->conn);

			}
			catch(Exception $e){
				die('Error:' . $e->getMessage());
			}

			if (!$this->conn) {
				$this->status_fatal = true;
				echo 'Connection failed';
				die();
			}
			else{
				$this->status_fatal = false;
			}
		}
		return $this->conn;
	}


	function disconnect(){
		if($this->conn){
			$this->conn =null;
		}
	}

*/

?>
