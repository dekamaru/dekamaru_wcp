<?php

class Configurator {
	
	private $cm;

	function __construct() {
		$this->cm = new ConfigurationManager();
	}

	public function getAllModules() {
		$sc = scandir(APP_ROOT.'modules'.DS); unset($sc[0], $sc[1]);
		$moduleID = 0;
		foreach($sc as $module) {
			if(!$this->cm->loadFile(APP_ROOT.'modules'.DS.$module.DS.'module.conf')) {
				$nonConfigurated[] = $module;
			} else {
				$modules[$moduleID]['module_name'] = $this->cm->get('module_name');
				$modules[$moduleID]['module_description'] = $this->cm->get('module_description');
				$modules[$moduleID]['module_author'] = $this->cm->get('module_author');
				$modules[$moduleID]['module_id'] = $this->cm->get('module_id');
				$moduleID++;
			}
		}
		if (isset($nonConfigurated)) { $result['status'] = FALSE; $result['nonConfigurated'] = $nonConfigurated; $result['modules'] = $modules; } else { $result['status'] = TRUE; $result['modules'] = $modules; }
		return $result;
	}

}

?>