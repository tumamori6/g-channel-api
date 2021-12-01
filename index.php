<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();
//$data  = $model->getAll('tests');
$data = $contents->htmlConvertObject(URL_LIST[CATEGORY]);
//$data = $obj;

include('index.html');
?>