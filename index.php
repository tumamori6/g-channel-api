<?
require(dirname(__FILE__) . '/class/ModelClass.php');
$model = new ModelClass();
$datas = $model->getAll('contents');
echo json_encode($datas[0],JSON_UNESCAPED_UNICODE);

