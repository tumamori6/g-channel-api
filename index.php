<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();
//$data  = $model->getAll('tests');
//$data = $contents->htmlConvertObject(URL_LIST[CATEGORY]);
$data = $contents->getArticleList(CONTENTS_URL);
//$data = file_get_contents(CONTENTS_URL);

include('index.html');
?>