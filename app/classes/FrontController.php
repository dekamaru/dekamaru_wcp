<?php

class FrontController {

	private $data;
	private $view;
	private $tProcessor;
	private $cManager;

	function __construct($user_request) {
		$this->data = $user_request;
		$this->view = new View();
		$this->tProcessor = new TemplateProcessor();
		$this->cManager = new ConfigurationManager();
	}

	public function run() {
		if (isset($this->data, $this->data['module'], $this->data['page']) && strlen($this->data['module']) >= 2 && strlen($this->data['page']) >= 2) {
			if (is_dir(APP_ROOT.'modules'.DS.$this->data['module'])) {
				if (file_exists(APP_ROOT.'modules'.DS.$this->data['module'].DS.$this->data['page'].'.php') && file_exists(APP_ROOT.'templates'.DS.SELECTED_THEME.DS.'modules'.DS.$this->data['module'].DS.$this->data['page'].'.tpl')) {
					if (file_exists(APP_ROOT.'modules'.DS.$this->data['module'].DS.'module.conf')) {
						$this->cManager->loadModule($this->data['module']);
						if ($this->cManager->get('only_for_include') == 'false') {
							if($this->cManager->get('enable_mysql') == 'true') {
								if(!DBManager::checkHost(MYSQL_HOST, MYSQL_USER, MYSQL_PASS)) {
									View::fatalError('Ошибка подключения к базе данных.');
								}
							}

							$template = $this->tProcessor->process($this->data['module'], $this->data['page']);
							$this->view->render($template);
							
						} else {
							View::fatalError("Этот модуль не предназначен для просмотра пользователями.");
						}
					} else {
						View::fatalError("Данный модуль не сконфигурирован.");
					}
				} else {
					View::fatalError("Шаблон или код данного модуля отсутствует.");
				}
			} else {
				View::fatalError("Модуля не существует.");
			}
		} else {
			$moduleDefault = strtolower(ConfigurationManager::getSystemVar('module_default'));
			$moduleLoad = $this->cManager->loadModule($moduleDefault);
			if(!$moduleLoad) {
				View::fatalError("Модуля по умолчанию не существует.");
			} else {
				if(!file_exists(APP_ROOT.'modules'.DS.$moduleDefault.DS.strtolower($this->cManager->get('page_default')).'.php')) {
					View::fatalError("Страница модуля по умолчанию не существует.");
				} else {
					$template = $this->tProcessor->process($moduleDefault, strtolower($this->cManager->get('page_default')));
					$this->view->render($template);
				}	
			}
		}
	}

}

?>