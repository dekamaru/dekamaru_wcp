<?php
	//die('asd');
	unset($_SESSION['username']);
	setcookie('username', null, time(), '/');
	setcookie('hash', null, time(), '/');
	header('Location: ?module=auth&page=login');

?>