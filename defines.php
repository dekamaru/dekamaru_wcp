<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', dirname(__FILE__).DS.'app'.DS);
define('SELECTED_THEME', ConfigurationManager::getSystemVar('selected_theme'));
define('ASSETS_DIR', 'app'.DS.'templates'.DS.SELECTED_THEME.DS.'assets');
define('SELECTED_LANG', ConfigurationManager::getSystemVar('engine_lang'));
define('INCLUDE_DIR', 'app'.DS.'include'.DS);

define('MYSQL_HOST', ConfigurationManager::getSystemVar('mysql_host'));
define('MYSQL_USER', ConfigurationManager::getSystemVar('mysql_user'));
define('MYSQL_PASS', ConfigurationManager::getSystemVar('mysql_password'));

?>