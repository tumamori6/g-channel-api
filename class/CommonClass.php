<?

class CommonClass
{
	public function __construct()
	{
		require(dirname(__FILE__) . '/../_def.php');
		ini_set('error_log', dirname(__FILE__) . '/log/error.log');
	}

	public function dbConnect()
	{
		$pdo = new PDO(DSN, DB_USER, DB_PASS);
		return $pdo;
	}
}
