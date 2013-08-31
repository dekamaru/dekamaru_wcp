<?php

class WoWAPI {

	private $dbManager;
	private $username;

	function __construct($dbManager) {
		$this->dbManager = $dbManager;
	}

	public function loadUsername($username) {
		$this->username = $username;
	}

	private function calculateHash($username, $password) {
		return strtoupper(sha1(strtoupper($username).':'.strtoupper($password)));
	}


	public function getAllCharacters() {
		$accID = $this->getAccountID();
		$this->dbManager->setDB('characters');
		$allCharacters = $this->dbManager->query("SELECT * FROM `characters` WHERE `account` = '".$accID."'");
		while($character = $this->dbManager->fetchArray($allCharacters)) {
			$result[$character['guid']]['guid']				= $character['guid'];
			$result[$character['guid']]['character_name'] 	= $character['name'];
			$result[$character['guid']]['race']				= $character['race'];
			$result[$character['guid']]['class']			= $character['class'];
			$result[$character['guid']]['level']			= $character['level'];
			$result[$character['guid']]['guild_name']		= $this->getGuildName($character['guid']);
		}
		return @$result;
	}

	public function getGuildName($guid) {
		$this->dbManager->setDB('characters');
		$guildID = $this->dbManager->result($this->dbManager->query("SELECT `guildid` FROM `guild_member` WHERE `guid` = '".$guid."'"));
		return $this->dbManager->result($this->dbManager->query("SELECT `name` FROM `guild` WHERE `guildid` = '".$guildID."'"));
	}

	public function accountLogin($username, $password) {
		$hash = $this->calculateHash($username, $password);
		$this->dbManager->setDB('auth');
		$status = $this->dbManager->query("SELECT * FROM `account` WHERE `sha_pass_hash` = '".$hash."'");
		if (mysql_num_rows($status) == 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function accountPassChange($old_pass, $new_pass) {
		if(!$this->accountLogin($this->username, $old_pass)) {
			return FALSE;
		} else {
			$new_hash = strtoupper($this->calculateHash($this->username, $new_pass));
			$this->dbManager->setDB('auth');
			$this->dbManager->query("UPDATE `account` SET `sha_pass_hash` = '".$new_hash."'");
			return TRUE;
		}
	}

	public function getAccountEmail() {
		$this->dbManager->setDB('auth');
		return $this->dbManager->result($this->dbManager->query("SELECT `email` FROM `account` WHERE `username` = '".$this->username."'"));
	}

	private function getAccountID() {
		$this->dbManager->setDB('auth');
		return $this->dbManager->result($this->dbManager->query("SELECT `id` FROM `account` WHERE `username` = '".$this->username."'"));
	}

	public function getLastLogin() {
		$this->dbManager->setDB('auth');
		$lastLogin = $this->dbManager->query("SELECT `last_login` FROM `account` WHERE `username` = '".$this->username."'");
		return $this->dbManager->result($lastLogin);
	}

	/*
		Запомни, что после использования функции использующей setDB, нужно заново делать setDB после этой функции, иначе останется setDB прошлой функции.
	*/
	public function charactersCount() {
		$accID = $this->getAccountID();
		$this->dbManager->setDB('characters');
		$charactersCount = $this->dbManager->query("SELECT * FROM `characters` WHERE `account` = '".$accID."'");
		return $this->dbManager->rowsNum($charactersCount);
	}


}

?>