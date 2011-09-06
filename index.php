<?php
error_reporting(E_ALL);
define("IN_CMS", true);

require_once("global.php");
$tpl->ParseTemplate("index");
?>