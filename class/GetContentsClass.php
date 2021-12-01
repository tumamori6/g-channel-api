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
		$category = DEFAULT_CATEGORY;

		for ($i = 0; $i < count(CATEGORY_LIST); $i++) {
			if (strpos($title, CATEGORY_LIST[$i]) !== false) {
				$category = CATEGORY_LIST[$i];
			}
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

	public function getLatestArticle($url)
	{
		$datas = $this->getArticleList($url);
		$latest_article_url = $datas[0]['article_url'];
		$obj = $this->htmlConvertObject($latest_article_url);
		$comments = $obj['.topic-comment .comment-item'];
		return $comments;
	}

}
