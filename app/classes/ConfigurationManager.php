<?php

class ConfigurationManager {

	private $configFile;
	private $filePath;

	public function loadModule($module) {
		$this->configFile = @file(APP_ROOT.'modules'.DS.$module.DS.'module.conf');
		$this->filePath = APP_ROOT.'modules'.DS.$module.DS.'module.conf';
		if (!$this->configFile) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public static function getSystemVar($var) {
		$app_config = file(APP_ROOT.'app.conf');
		foreach($app_config as $line) {
			if ($line[0] == '#') {
				continue; // If line starts with comment symbol - skip line
			} else {
				$config_line = explode('=', $line);
				if (trim($config_line[0]) == trim($var)) {
					return str_replace('_', ' ', trim($config_line[1]));
				}
			}
		}
		return FALSE;
	}

	public static function moduleCheck($module) {

	}

	/*
		Load file on root dir
	*/

	public function dump() {
		$vars = array();
		$values = array();
		foreach($this->configFile as $line) {
			if ($line[0] == '#') continue;
			$expl = explode('=', $line);
			if (empty($expl[1])) continue;
			$vars[] = trim($expl[0]);
			$values[] = str_replace('_', ' ', trim($expl[1]));
		}
		return array($vars, $values);
	}

	public function loadFile($file) {
		$this->configFile = @file($file);
		$this->filePath = $file;
		if (!$this->configFile) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function get($var) {
		foreach($this->configFile as $line) {
			if ($line[0] == '#') {
				continue; // If line starts with comment symbol - skip line
			} else {
				$config_line = explode('=', $line);
				if (trim($config_line[0]) == trim($var)) {
					return str_replace('_', ' ', trim($config_line[1]));
				}
			}
		}
		return FALSE;
	}

	public function set($var, $value) {

	}

}

?>