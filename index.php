<?

require('class/GetContentsClass.php');

$contents = new GetContentsClass();

$data = [];
//$data = $model->getAll
$data = $contents->getArticleList(CONTENTS_URL);
// scheduler... php /app/cron.php

include('index.html');
?>