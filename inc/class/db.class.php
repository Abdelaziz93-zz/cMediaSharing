<?php
/*
      __  __          _ _        _____ _                _             
     |  \/  |        | (_)      / ____| |              (_)            
  ___| \  / | ___  __| |_  __ _| (___ | |__   __ _ _ __ _ _ __   __ _ 
 / __| |\/| |/ _ \/ _` | |/ _` |\___ \| '_ \ / _` | '__| | '_ \ / _` |
| (__| |  | |  __/ (_| | | (_| |____) | | | | (_| | |  | | | | | (_| |
 \___|_|  |_|\___|\__,_|_|\__,_|_____/|_| |_|\__,_|_|  |_|_| |_|\__, |
                                                                 __/ |
                                                                |___/ 
 * cMediaSharing 1.0
 * Copyright 2011 cMediaSharing, All Rights Reserved
 *
 * Website: http://sourceforge.net/projects/cmediasharing
 * License: FREEWARE
 *
 * $Id: index.php 2011-09-02 17:41 Drilon $
*/


class mysql_db {
	private $did;
	
	public function __construct($host, $user, $password, $db) {
		$this->did = mysql_connect($host, $user, $password);
		mysql_select_db($db, $this->did);
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