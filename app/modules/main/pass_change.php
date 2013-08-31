<?php

include INCLUDE_DIR.'other.php';

	$loginCheck = loginCheck();
	if(!$loginCheck) {
		header('Location: ?module=auth&page=login');
	} else {
		$username = $loginCheck;
	}

$dbManager = new DBManager(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
$wowAPI = new WoWAPI($dbManager);
$wowAPI->loadUsername($username);

if (isset($_POST['old_pass'], $_POST['new_pass'], $_POST['new_pass_repeat'])) {
	if ($_POST['new_pass'] != $_POST['new_pass_repeat']) {
		$error = '<div class="alert alert-error" style="width: 292px; padding: 8px; text-align: center">Пароли не совпадают!</div>';
	} else {
		if(!$wowAPI->accountPassChange($_POST['old_pass'], $_POST['new_pass'])) {
			$error = '<div class="alert alert-error" style="width: 292px; padding: 8px; text-align: center">Старый пароль введен неверно!</div>';
		} else {
			$success = '<div class="alert alert-success" style="width: 292px; padding: 8px; text-align: center">Пароль успешно изменен!</div>';
		}
	}
}

?>