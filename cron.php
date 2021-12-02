<?
require(dirname(__FILE__) . '/class/GetContentsClass.php');

$datas = new GetContentsClass();

if($datas){
	echo 'ok';
}else{
	echo 'ng';
}
