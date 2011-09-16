<?php
class mysql_db {
	private $did;
	public function __construct($host, $user, $password, $db) {		global $lang;
		$this->did = mysql_connect($host, $user, $password);		if($this->did) {
			mysql_select_db($db, $this->did);		} else {			throwErr($lang['error_db_wrong'].mysql_error()."</div>");		}
	}
	public function query($q) {
		return mysql_query($q, $this->did);
	}
	public function one_query($q) {
		$rslt = mysql_query($q, $this->did);
		return mysql_fetch_array($rslt, $this->did);
	}
	public function escape($value) {
		return mysql_real_escape_string($value, $this->did);
	}
}
?>