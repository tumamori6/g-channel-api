<?
require('class/ModelClass.php');
require('class/GetContentsClass.php');
$model = new ModelClass();
$contents = new GetContentsClass();

ini_set('log_errors', 'On');
ini_set('error_log', dirname(__FILE__) . '/log/error.log');
error_log("__________________________________________");
error_log("index.php");
error_log("__________________________________________");
//$data = $model->getAll
//$data = $contents->getArticleList(CONTENTS_URL);
// scheduler... php /app/cron.php

include('index.html');
?>