<?php

require(dirname(__FILE__) . '/CommonClass.php');

class ModelClass extends CommonClass
{
	public function __construct()
	{
		parent::__construct();
		$this->_pdo          = $this->dbConnect();
		$this->_posted       = isset($_POST['posted'])       ? $_POST['posted']       : 0;
		$this->_content_id   = isset($_POST['content_id'])   ? $_POST['content_id']   : 0;
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

	//todo #2 カラム外だし
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
			WHERE
				posted_at IS NULL AND
				deleted_at IS NULL
			ORDER BY created_at DESC
   LIMIT
    100
   ";

		$list = $this->_pdo->query($sql)->fetchAll();
		return $list;
	}

	public function updatePosted($table_name)
	{
		$sql = "
		UPDATE {$table_name}
		SET posted_at = :posted_at
		WHERE id = :id
		";

		$param = [
			':id'        => $this->_content_id,
			':posted_at' => date('Y-m-d H:i:s'),
		];

		$this->postParams($sql,$param);

	}

}
