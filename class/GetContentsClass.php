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
		$obj			   = htmlConvertObject($url);
		$articles = $obj['.main > .topic-list-wrap > .topic-list > li > a'];
		$datas    = [];

		// foreach($articles as $article){
		// 	$article_title = utf8_decode(pq($article)->find('.title')->text());
		// 	$article_url   = 'https://girlschannel.net'.pq($article)->attr("href");
		// 	// $datas[] = [
		// 	// 	'article_title' => $article_title,
		// 	// 	'article_url'   => $article_url,
		// 	// ];
		// 	$datas['title'] = $article_title;
		// 	$datas['url']   = $article_url;
		// }

		return $datas;

	}

}
