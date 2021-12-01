<?

require(dirname(__FILE__) . '/CommonClass.php');

class ModelClass extends CommonClass
{
	public function __construct()
	{
		parent::__construct();
		//$this->_pdo          = $this->dbConnect();
	}

	// public function queryPost($pdo, $sql, $param)
	// {
	// 	$stmt = $pdo->prepare($sql);

	// 	foreach ($param as $key => $val) {
	// 		$stmt->bindValue($key, $val);
	// 	}

	// 	$stmt->execute();
	// 	return $stmt;
	// }

	// public function getAll($table_name)
	// {
	// 	$sql = "
 //   SELECT
	// 		*
	// 		FROM
 //    ".$table_name."
 //   LIMIT
 //    100
 //   ";

	// 	$list = $this->_pdo->query($sql)->fetchAll();
	// 	return $list;
	// }


}
