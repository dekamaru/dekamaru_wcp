<?php

if (isset($_SESSION['username']) || isset($_COOKIE['username'], $_COOKIE['hash'])) {
	header('Location: ?module=main&page=start');
}

if (isset($_POST['login'], $_POST['password'], $_POST['captcha_key'])) {

	if ($_POST['captcha_key'] != $_SESSION['captcha_word']) {
		$error = '<div class="alert alert-error" style="width: 292px; padding: 8px; text-align: center">
          Защитный код введён неверно!
      </div>';
	} else {
		$dbManager = new DBManager(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
		$wowAPI = new WoWAPI($dbManager);

		$username = $_POST['login'];
		$password = $_POST['password'];

		if (!$wowAPI->accountLogin($username, $password)) {
			$error = '<div class="alert alert-error" style="width: 292px; padding: 8px; text-align: center">
	          Неверный логин или пароль!
	      </div>';
		} else {
			if($_POST['remember_me']) {
				setcookie('username', $username, time()+31*24*60*60, '/');
				setcookie('hash', md5($username.'dekamaruisgod'), time()+31*24*60*60, '/');
				header('Location: ?module=main&page=start');
			} else {
				$_SESSION['username'] = $username;
				header('Location: ?module=main&page=start');
			}
		}
	}
}

?>