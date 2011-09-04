<?php
require_once("inc/config.php");
require_once("inc/languages/".$settings['language'].".php");
require_once("inc/class/template.class.php");
require_once("inc/function/template.function.php");

$tpl = new Template($settings['theme']);

if(!defined("IN_CMS") || !IN_CMS) { throwErr($lang['error_not_in_cms']); }
?>