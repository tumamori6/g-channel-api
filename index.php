<?
require(dirname(__FILE__) . '/class/ModelClass.php');
$model = new ModelClass();
$datas = $model->getAll('contents');
print_r($datas);
