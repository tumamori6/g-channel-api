<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();
//$data  = $model->getAll('tests');
$data = $contents->getArticleList(URL_LIST[CATEGORY]);


include('index.html');
?>