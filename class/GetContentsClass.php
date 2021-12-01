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

	public function getArticleList($url)
	{
		$obj					 = $this->htmlConvertObject($url);
		$articles = $obj['.main > .topic-list-wrap > .topic-list > li > a'];

		foreach ($articles as $val) {
			$arr['title'][] = utf8_decode(pq($val)->find('.title')->text());
			$arr['url'][]   = 'https://girlschannel.net'.pq($val)->attr("href");
		}

		return $arr;
	}

}
