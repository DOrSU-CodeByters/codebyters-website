<?php
require_once("../model/Response.php");
class Database
{
	//database properties
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $dbName = "codebyters-website";


	private $conn;

	public function connect()
	{
		$this->conn = null;
		try {
			$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
			$this->conn = new PDO($dsn, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) {
			$response = new Response();
			$response->setSuccess(false);
			$response->setHttpStatusCode(500);
			$response->addMessage("Database connection failed");
			$response->send();
			exit;
		}
		return $this->conn;
	}

}

