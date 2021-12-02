<?

require(dirname(__FILE__) . '/CommonClass.php');

class ModelClass extends CommonClass
{
	public function __construct()
	{
		parent::__construct();
		$this->_pdo          = $this->dbConnect();
	}

	public function postParams($sql, $params)
	{
		$query = $this->_pdo->prepare($sql);

		foreach ($params as $key => $val) {
			$query->bindValue($key, $val);
		}

		$query->execute();
		return $query;
	}

	//todo #1 created_at updated_at delete_flg
	public function createAddArticleSql($table_name)
	{
		$sql = "
			INSERT INTO
    {$table_name}
				(
					title,
					url,
					category,
					comments_cnt,
					created_at
				)
				VALUES
				(
					:title,
					:url,
					:category,
					:comments_cnt,
					:created_at
				)
				
		";
		return $sql;
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
