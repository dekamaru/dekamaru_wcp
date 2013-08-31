<?php

class TemplateProcessor {

	public function process($module, $page) {

		include APP_ROOT.'modules'.DS.$module.DS.$page.'.php';
		include APP_ROOT.'lang'.DS.SELECTED_LANG.'.php';
		$template = file_get_contents(APP_ROOT.'templates'.DS.SELECTED_THEME.DS.'modules'.DS.$module.DS.$page.'.tpl');

		/*
			Fetching template and process variables.
		*/

		$toReplace = array(); 

		preg_match_all('/\[\((.*?)\)(.*?)\]/', $template, $results); 
		for($i=0;$i<count($results[0]);$i++) { 
			switch(strtolower($results[1][$i])) { 

				case 'var':
					eval("\$output = @\$".$results[2][$i].";");
					if (!isset($output))
						$toReplace[] = null;
					else 
						$toReplace[] = $output;
				break;

				case 'lang':
					eval("\$output = @\$language['".strtoupper($module)."']['".strtoupper($page)."']['".strtoupper($results[2][$i])."'];");
					if (isset($output))
						$toReplace[] = $output;
				break;

				case 'lang_system':
					eval("\$output = @\$language['SYSTEM']['".strtoupper($results[2][$i])."'];");
					if (isset($output))
						$toReplace[] = $output;
				break;

				case 'session':
					eval("\$output = @\$_SESSION['".$results[2][$i]."'];");
					if (isset($output))
						$toReplace[] = $output;
				break;

				case 'server':
					eval("\$output = @\$_SERVER['".$results[2][$i]."'];");
					if (isset($output))
						$toReplace[] = $output;
				break;

				case 'include':
					$parts = explode(':', $results[2][$i]);
					$toReplace[] = $this->process($parts[0], $parts[1]);
				break;

			}
		}

		// Helping templates to find assets and includes dir
		$results[0][] = "[ASSETS_DIR]";
		$results[0][] = "[INCLUDE_DIR]";
		$toReplace[] = ASSETS_DIR;
		$toReplace[] = INCLUDE_DIR;

		$template = str_replace($results[0], $toReplace, $template);
		return $template;
	}
}

?>