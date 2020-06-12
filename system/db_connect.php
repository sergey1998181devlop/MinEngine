<?
global $db_conn;
$db_driver = 'mysql';
$db_host = 'localhost';
$db_port = 3306;
$db_name = 'u0970629_default';
$db_login = 'u0970629_default';
$db_pass = 'C9e7_Fvi';
$dsn = $db_driver.':dbname='.$db_name.';host='.$db_host;
try {
	$db_conn = new PDO($dsn, $db_login, $db_pass);
} catch (PDOException $e) {
	echo $e;
}
?>