<?php

// Пакет русского языка для системы DWCP
// Структура: $language[MODULE][PAGE][NAME]

$language['SYSTEM']['VAR_NOT_EXIST'] 						= "Переменной не существует!";
$language['SYSTEM']['ENGINE_WARNING']						= "Системное предупреждение";

// Auth module language

$language['AUTH']['LOGIN']['FORM_TITLE'] 					= 'Вход в личный кабинет';
$language['AUTH']['LOGIN']['FORM_LOGIN_PLACEHOLDER'] 		= 'Логин';
$language['AUTH']['LOGIN']['FORM_PASSWORD_PLACEHOLDER'] 	= 'Пароль';
$language['AUTH']['LOGIN']['FORM_REMEMBERME_TEXT'] 			= 'Запомнить этот компьютер';
$language['AUTH']['LOGIN']['FORM_BUTTON_SUBMIT_TEXT'] 		= 'Войти';
$language['AUTH']['LOGIN']['PAGE_LABEL_RESTORE_TEXT'] 		= 'Восстановление доступа к аккаунту';
$language['AUTH']['LOGIN']['CAPTCHA_TEXT'] 					= 'Защитный код';

$language['AUTH']['RESTORE']['FORM_TITLE'] 					= 'Восстановление доступа';
$language['AUTH']['RESTORE']['FORM_LOGIN_PLACEHOLDER'] 		= 'Логин';
$language['AUTH']['RESTORE']['FORM_BUTTON_SUBMIT_TEXT'] 	= 'Начать процедуру восстановления';
$language['AUTH']['RESTORE']['PAGE_LABEL_RETURN_TEXT'] 		= 'Вернутся к странице авторизации';

$language['RACES'] = array(null, 'Человек', 'Орк', 'Дворф', 'Ночной эльф', 'Нежить', 'Таурен', 'Гном', 'Тролль', null, 'Эльф крови', 'Дреней');
$language['CLASSES'] = array(null, 'Воин', 'Паладин', 'Охотник', 'Разбойник', 'Жрец', 'Рыцарь смерти', 'Шаман', 'Маг', 'Чернокнижник', null, 'Друид');



?>