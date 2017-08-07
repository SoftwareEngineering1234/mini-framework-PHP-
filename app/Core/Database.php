<?php

class Database
{
	private static $_instance = NULL;
	private $mysqli;
	function __construct()
	{
		$this->mysqli = new mysqli('localhost','root','','belajar') or die('connection error');
	}

	public static function getInstance()
	{
		if (!isset(self::$_instance)) {
			self::$_instance = new Database();
		}
		return self::$_instance;
	}

	public function index($table)
	{
		$reply = [];
		$query  = "SELECT * FROM $table";
		$result = $this->mysqli->query($query);

		while ($row = $result->fetch_assoc()) 
		  $reply[] = $row;

		return $reply;
	}
}