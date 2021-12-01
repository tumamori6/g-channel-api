<?

require(dirname(__FILE__) . '/CommonClass.php');

class ModelClass extends CommonClass
{
	public function __construct()
	{
		parent::__construct();
		$this->_pdo          = $this->dbConnect();
	}

	public function queryPostParams($sql, $params)
	{
		$query = $this->_pdo->prepare($sql);

		foreach ($params as $key => $val) {
			$query->bindValue($key, $val);
		}

		$query->execute();
		return $query;
	}

	public function getAll($table_name)
	{
		$sql = "
   SELECT
			*
			FROM
    {$table_name}
   LIMIT
    100
   ";

		$list = $this->_pdo->query($sql)->fetchAll();
		return $list;
	}
}
