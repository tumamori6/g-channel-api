<?php

class CommonClass
{
	public function __construct()
	{
		require(dirname(__FILE__) . '/../_def.php');
	}

	public function dbConnect()
	{
		$pdo = new PDO(DSN, DB_USER, DB_PASS);
		return $pdo;
	}

	public function debug($message)
	{
		ini_set('log_errors', 'On');
		ini_set('error_log', '/app/log/error.log');
		error_log("/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/");
		error_log($message);
		error_log("/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/");
	}
}
