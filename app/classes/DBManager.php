<?php

class DBManager {

	public $status;

	function __construct($host, $username, $password) {
		$connection = @mysql_connect($host, $username, $password);
		mysql_query('SET NAMES utf8');
	}

	public static function checkHost($host, $username, $password) {
		$connection = @mysql_connect($host, $username, $password);
		if (!$connection) { return FALSE; } else { return TRUE; }
	}

	public function fetchArray($query) {
		return mysql_fetch_array($query);
	}

	public function fetchAssoc($query) {
		return mysql_fetch_assoc($query);
	}

	public function query($query) {
		$q = mysql_query($query);
		return $q;
	}

	public function rowsNum($query) {
		return mysql_num_rows($query);
	}

	public function result($query) {
		return mysql_result($query, 0);
	}

	public function setDB($db) {
		if (!mysql_select_db($db)) {
			return FALSE;
		} else {
			mysql_select_db($db);
		}
	}
}

?>