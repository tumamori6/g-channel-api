<?
//DB関係
$db_url = parse_url(getenv('CLEARDB_DATABASE_URL'));
define('DB_HOST', $db_url['host']);
define('DB_NAME', ltrim($db_url['path'], '/'));
define('DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8');
define('DB_USER', $db_url['user']);
define('DB_PASS', $db_url['pass']);

//コンテンツ関係
define('CONTENTS_URL','https://girlschannel.net/topics/category/cook/');
define('DEFAULT_CATEGORY','料理');
define('CATEGORY_LIST',[
	'カフェ',
	'スイーツ',
	'居酒屋',
	'お菓子',
	'ランチ',
	'ご飯',
	'外食',
	'レシピ',
	'お弁当',
	'朝ごはん',
	'レストラン',
	'グルメ',
	'コンビニ',
	'料理',
	'食事',
	'食べ物',
	'肉',
	'丼'
]);
