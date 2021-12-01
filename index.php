<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();
//$data  = $model->getAll('tests');
//$data = $contents->htmlConvertObject(URL_LIST[CATEGORY]);
$data = $contents->getArticleList(URL_LIST[CATEGORY]);
//$data = file_get_contents('https://girlschannel.net/topics/category/cook/');

include('index.html');
?>