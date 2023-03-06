<?php

class Database
{
	//database properties
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $dbName = "codebyters-website";


	private $conn;
	
	public function connect(){
		$this->conn = null;
		try {
			$dsn = "mysql:host=" .$this->host. ";dbname=" . $this->dbName;
			$this->conn = new PDO($dsn, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch ( PDOException $e) {
			echo "Connection error: " . $e->getMessage();
		}
		return $this->conn;
	}

}

