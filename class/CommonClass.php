<?

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
}
