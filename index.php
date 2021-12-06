<?
require(dirname(__FILE__) . '/class/ModelClass.php');
$model = new ModelClass();

if($model->_posted){
	$model->updatePosted('contents');
	exit();
}

$datas = $model->getAll('contents');
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
