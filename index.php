<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();

//$data = $contents->getArticleList(CONTENTS_URL);
//$data = file_get_contents(CONTENTS_URL);
$data = file_get_contents('https://girlschannel.net/topics/3717103/');

include('index.html');
?>