<?php

require_once("../config/Database.php");
require_once("Response.php");

class UserModel
{
	private $conn;
	public function __construct($db)
	{
		$this->conn = $db;
	} 

	
}
