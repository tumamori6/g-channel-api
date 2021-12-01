<?

require(dirname(__FILE__) . '/ModelClass.php');

class GetContentsClass extends ModelClass
{
	public function __construct()
	{
		parent::__construct();
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

		$process_start = microtime(true);

		$obj					  = $this->htmlConvertObject($url);
		$articles  = $obj['.main > .topic-list-wrap > .topic-list > li > a'];
		$opt_datas = [];

		foreach ($articles as $article) {
			$article_title = utf8_decode(pq($article)->find('.title')->text());
			$article_url   = 'https://girlschannel.net' . pq($article)->attr("href");
			$category      = $this->checkCategory($article_title);
			$datas[] = [
				':title'   => $article_title,
				':url'     => $article_url,
				':category'=> $category,
			];
		}

		array_splice($datas,10);

		foreach($datas as $data){
			$obj                  = $this->htmlConvertObject($data['article_url']);
			$comments             = $obj['.topic-comment .comment-item'];
			$data['comments_cnt'] = count($comments);
			$opt_datas[] = $data;
			sleep(.5);
		}

		$processing_time = microtime(true) - $process_start;
		$this->debug('Success : getArticleList / '.$processing_time.'sec');

		return $opt_datas;

	}

	// public function addArticlesData($datas)
	// {

	// }

}
