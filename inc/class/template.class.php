<?php
class Template {
	public $current_theme;
	public function __construct($theme) {
		$this->current_theme = $theme;
	}
	
	public function ParseTemplate($tpl_file, $content = array()) {
		global $settings, $lang;
		require_once("./inc/3rdparty/dwoo/dwooAutoload.php");
		$tpl_file = "./inc/templates/".$this->current_theme."/".$tpl_file.".tpl";
		
		$dt = new Dwoo();
		$dt_data = array();
		$dt_data['settings'] = $settings;
		$dt_data['content'] = $content;
		$dt_data['lang'] = $lang;
		
		echo $dt->get($tpl_file, $dt_data);
	}
}

?>