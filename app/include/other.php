<?php

function loginCheck() {
	if(!isset($_SESSION['username'])) {
		if(!isset($_COOKIE['username'], $_COOKIE['hash'])) {
			return FALSE;
		} else {
			if(md5($_COOKIE['username'].'dekamaruisgod') != $_COOKIE['hash']) {
				setcookie('username', null, time());
				setcookie('hash', null, time());
				return FALSE;
			} else {
				return $_COOKIE['username'];
			}
		}
	} else {
		return $_SESSION['username'];
	}
}

function generateCharactersTable($heroArray) {
	include 'app/lang/'.SELECTED_LANG.'.php';
	$heroesTable = null;
	if(!$heroArray) {
		$heroesTable = 'Персонажей нет';
	} else {
		$heroesTable .= '<table id="main-table" style="text-align:center">
	                <thead>
	                  <tr>
	                      <th scope="col">Имя</th>
	                        <th scope="col">Раса</th>
	                        <th scope="col">Класс</th>
	                        <th scope="col">Уровень</th>
	                        <th scope="col">Гильдия</th>
	                    </tr>
	                </thead>
	                <tbody>';
		foreach($heroArray as $character) {
			$heroesTable .= '<tr id="'.$character['guid'].'"><td>'.$character['character_name'].'</td><td>'.$language['RACES'][$character['race']].'</td><td>'.$language['CLASSES'][$character['class']].'</td><td>'.$character['level'].'</td><td>'.$character['guild_name'].'</td></tr>';
		}
		$heroesTable .= '</tbody></table>';
	}
	return $heroesTable;
}

function emailObfuscate($email) {
	if (empty($email)) { return '.!.'; }
	$starsCount1 = null;
	$starsCount2 = null;
	$spl = explode('@', $email);
	$domain = explode('.', $spl[1]);
	for($i=0;$i<strlen($spl[0])-2;$i++) $starsCount1 .= '*';
	for($i=0;$i<strlen($domain[0])-1;$i++) $starsCount2 .= '*';
	return $spl[0][0].$spl[0][1].$starsCount1.'@'.$spl[1][0].$starsCount2.'.'.$domain[1];
}

?>