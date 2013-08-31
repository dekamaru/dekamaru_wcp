<?php

class View {

	public function render($data) {
		echo $data;
	}

	public static function fatalError($text) {
		$tpl = file_get_contents(APP_ROOT.'templates'.DS.SELECTED_THEME.DS.'error.tpl');
		$tpl = str_replace(array('[ASSETS_DIR]', '[ERROR_TEXT]'), array(ASSETS_DIR, $text), $tpl);
		die($tpl);
	}
}

?>