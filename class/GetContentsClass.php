<?

class GetContentsClass
{
	public function __construct()
	{
		require(dirname(__FILE__) . '/../_def.php');
		require(dirname(__FILE__) . '/../vendor/autoload.php');
	}

	private function htmlConvertObject($url)
	{
		$html = file_get_contents($url);
		$obj  = phpQuery::newDocument($html);
		return $obj;
	}

	private function checkCategory($title)
	{
		for ($i = 0; $i < count(CATEGORY_LIST); $i++) {
			$category = strpos($title, CATEGORY_LIST[$i]) !== false ? CATEGORY_LIST[$i] : DEFAULT_CATEGORY;
		}

		return $category;
	}

	public function getArticleList($url)
	{
		$obj					 = $this->htmlConvertObject($url);
		$articles = $obj['.main > .topic-list-wrap > .topic-list > li > a'];

		foreach ($articles as $article) {
			$article_title = utf8_decode(pq($article)->find('.title')->text());
			$article_url   = 'https://girlschannel.net' . pq($article)->attr("href");
			$category      = $this->checkCategory($article_title);
			$datas[] = [
				'article_title' => $article_title,
				'article_url'   => $article_url,
				'category'      => $category,
			];
		}

		return $datas;
	}

}
