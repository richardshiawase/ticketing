<?php
class Database{

	private $conn;
    private $status; 
	function __construct(){
		$this->connectDb();
	}

	public function connectDb(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_ticket";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
        }
        return $this->conn = $conn;
        
	}
	
	public function executeQuery($query){
		$this->status = mysqli_query($this->conn, $query) ? 1 : 0 ; 
        mysqli_close($this->conn);
        return $this->status;
        
			
    }
}



?>