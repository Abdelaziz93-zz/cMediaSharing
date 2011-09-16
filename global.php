<?phpsession_start();
require_once("inc/config.php");require_once("inc/class/db.class.php");
require_once("inc/languages/".$settings['language'].".php");require_once("inc/class/user.class.php");
require_once("inc/class/template.class.php");
require_once("inc/function/template.function.php");
$tpl = new Template($settings['theme']);$db = new mysql_db($settings['db_host'], $settings['db_user'], $settings['db_password'], $settings['db_name']);$user = new user();
if(!defined("IN_CMS") || !IN_CMS) { throwErr($lang['error_not_in_cms']); }if($settings['site_closed']) {	if(strlen($settings['site_close_reason']) <= 0) {		$settings['site_close_reason'] = $lang['site_closed_no_reason'];	}		$tpl->ParseTemplate("closed");	exit;}
?>