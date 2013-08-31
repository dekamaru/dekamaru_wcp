<?php

session_start();

function autorun($name) {
	include APP_ROOT.'classes'.DS.$name.'.php';
}

spl_autoload_register('autorun');

include 'defines.php';

$frontController = new FrontController($_REQUEST);
$frontController->run();


?>