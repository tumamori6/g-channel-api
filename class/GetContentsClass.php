<?

class GetContentsClass
{
	public function __construct()
	{
		require(dirname(__FILE__) . '/../_def.php');
		require(dirname(__FILE__) . '/../vendor/autoload.php');
	}

	public function htmlConvertObject($url)
	{
		$html = file_get_contents($url);
		$obj  = phpQuery::newDocument($html);
		return $obj;
	}

}
