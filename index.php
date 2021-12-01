<?

require('class/GetContentsClass.php');

$contents = new GetContentsClass();

$data = [];
//$data = $model->getAll
$datas = $contents->getArticleList(CONTENTS_URL);
// scheduler... php /app/cron.php
// $contents->addArticlesData($datas);
//$data = file_get_contents(CONTENTS_URL);

include('index.html');
?>