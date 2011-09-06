<?php
function throwErr($msg, $finish = true) {
	global $tpl, $settings;
	
	$content = array();
	$content['msg'] = $msg;
	
	$tpl->ParseTemplate("error", $content);
	
	if($finish) { exit; }
}
?>