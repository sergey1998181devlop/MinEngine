<?require($_SERVER['DOCUMENT_ROOT'].'/system/db_connect.php')?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
<?
if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$authorize_stmt = $db_conn->prepare('SELECT * FROM users WHERE username = :username AND is_admin = 1');
	$authorize_stmt->execute([':username' => $_POST['username']]);
	$user = $authorize_stmt->fetch();
	if(empty($user)) {
		$error_message = 'Пользователь не найден';
		require($_SERVER['DOCUMENT_ROOT'].'/system/login.php');
	} elseif( password_verify($_POST['password'], $user['password']) ) {
		$session_set_stmt =  $db_conn->prepare('UPDATE users SET session_id = :session_id, login_date = :login_date WHERE id = :id');
		$session_set_stmt->execute([
			':session_id' => $_COOKIE['PHPSESSID'],
			':login_date' => Time(),
			':id' => $user['id']
		]);
		require($_SERVER['DOCUMENT_ROOT'].'/system/admin_panel.php');
	} else {
		$error_message = 'Неверный пароль';
		require($_SERVER['DOCUMENT_ROOT'].'/system/login.php');
	}
} else {
	$stmt = $db_conn->prepare('SELECT * FROM users WHERE session_id = :session_id AND is_admin = 1');
	$stmt->execute([':session_id' => $_COOKIE['PHPSESSID']]);
	$result = $stmt->fetch();
	if(empty($result) || ($result['login_date'] == 0) ){
		require($_SERVER['DOCUMENT_ROOT'].'/system/login.php');
	} elseif( (Time() - $result['login_date']) > 259200 ) {
		$session_set_stmt =  $db_conn->prepare('UPDATE users SET session_id = :session_id, login_date = :login_date WHERE id = :id');
		$session_set_stmt->execute([
			':session_id' => '',
			':login_date' => 0,
			':id' => $result['id']
		]);
		require($_SERVER['DOCUMENT_ROOT'].'/system/login.php');
	} else {
		require($_SERVER['DOCUMENT_ROOT'].'/system/admin_panel.php');
	}
}
?>
</body>
</html>