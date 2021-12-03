<?
require(dirname(__FILE__) . '/class/ModelClass.php');
$model = new ModelClass();
$datas = $model->getAll('contents');
echo json_encode($datas,JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);

