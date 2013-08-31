<?php

include INCLUDE_DIR.'other.php';

	$loginCheck = loginCheck();
	if(!$loginCheck) {
		header('Location: ?module=auth&page=login');
	} else {
		$username = $loginCheck;
	}

?>