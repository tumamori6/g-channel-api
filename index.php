<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();

//$data = $contents->getArticleList(CONTENTS_URL);
$data = dirname(__FILE__);

include('index.html');
?>