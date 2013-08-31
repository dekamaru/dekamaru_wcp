<?php

include APP_ROOT.'lang'.DS.SELECTED_LANG.'.php';

$configurator = new Configurator();
$modules = $configurator->getAllModules();

if(!$modules['status']) {
	$error = '<div class="alert alert-error" style="width: 600px; padding: 8px; text-align: center">Следующие модули не сконфигурированы: ';
	foreach($modules['nonConfigurated'] as $m) {
		$error .= $m.', ';
	}
	$error = substr($error, 0, -2);
	$error .= '<br>Пожалуйста настройте данные модули, иначе система работать не будет!<br><a href="#">Сконфигурировать модули</a></div>';
}
$modulesTable = '<table id="hor-minimalist-b" style="margin-top:5px; text-align: center">
    <thead>
      <tr>
          <th scope="col">Модуль</th>
            <th scope="col">Описание</th>
            <th scope="col">Автор</th>
            <th scope="col">Действия</th>
        </tr>
    </thead>
    <tbody>';

foreach($modules['modules'] as $m) {
	$modulesTable .= '<tr><td>'.$m['module_name'].'</td><td>'.$m['module_description'].'</td><td>'.$m['module_author'].'</td><td><a href="?module=configurator&page=edit&m='.strtolower($m['module_id']).'">Настроить</a></td></tr>';
}
$modulesTable .= '</tbody></table>';
?>