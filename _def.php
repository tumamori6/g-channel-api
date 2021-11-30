<?
$db_url = parse_url(getenv('CLEARDB_DATABASE_URL'));
define('DB_HOST', $db_url['host']);
define('DB_NAME', ltrim($db_url['path'], '/'));
define('DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8');
define('DB_USER', $db_url['user']);
define('DB_PASS', $db_url['pass']);
