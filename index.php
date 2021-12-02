<?

require(dirname(__FILE__) . 'class/ModelClass.php');
$model = new ModelContentsClass();

// $contents = new GetContentsClass();
// $datas = $contents->getArticleList(CONTENTS_URL);
// $contents->addArticlesData($datas);

//include('index.html');

$datas = $model->getAll('contents');

echo json_encode($datas);

