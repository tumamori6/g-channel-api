<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();

$data = [];
$model->debug('index.php');
//$data = $model->getAll
//$data = $contents->getArticleList(CONTENTS_URL);
// scheduler... php /app/cron.php

include('index.html');
?>