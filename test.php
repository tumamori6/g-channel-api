<?php
require(dirname(__FILE__) . '/class/GetContentsClass.php');
$contents = new GetContentsClass();
$datas    = $contents->getArticleList(CONTENTS_URL);
//$contents->addArticlesData($datas);
print_r($datas);