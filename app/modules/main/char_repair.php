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

$heroesTable = null;
$heroArray = $wowAPI->getAllCharacters();

$heroesTable = generateCharactersTable($heroArray);


?>