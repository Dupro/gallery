<?php 

require_once("new_config.php");

class Database {


	public $connection;
	public $db;

	function __construct(){

		$this->db = $this->open_db_connection();
	}

	public function open_db_connection(){

		// $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if($this->connection->connect_errno){
			die("Database connection Failed". $this->connection->error);
		}

		return $this->connection;
	}

	public function query($sql){

		$result = $this->db->query($sql);

		$this->confirm_query($result);
			   // mysqli_query($this->connection, $sql);

		return $result;

	}

	private function confirm_query($result){

		if(!$result){
			die("Query Failed" . $this->db->error);
		}
	}

	public function escape_string($string){
		return $this->db->real_escape_string($string);
		// mysqli_real_escape_string($this->db, $string);

		return $escaped_string;
	}

	public function the_insert_id() {

		return $this->db->insert_id;
	}




}

$database = new Database();



?>