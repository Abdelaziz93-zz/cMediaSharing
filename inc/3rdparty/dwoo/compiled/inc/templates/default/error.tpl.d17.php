<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $this->scope["settings"]["site_name"];?> - <?php echo $this->scope["content"]["title"];?></title>
	<style type="text/css">
		body {
			background-color:#F3F3F3;
			font-size:11px;
			font-family: Tahoma;
		}
		
		div.error {
			background-color:#221F1F;
			color:#FFF;
			font-weight:bold;
			font-size:12px;
			margin: auto;
			width:50%;
			padding:7px;
			margin-top:50px;
			
			-webkit-border-top-left-radius: 5px;
			-webkit-border-top-right-radius: 5px;
			-moz-border-radius-topleft: 5px;
			-moz-border-radius-topright: 5px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			
			border:1px solid #000;
		}
		
		div.yellow {
			background-color:#FFF8B5;
			color:#000;
			margin: auto;
			width:50%;
			padding:7px;
			
			-webkit-border-bottom-right-radius: 5px;
			-webkit-border-bottom-left-radius: 5px;
			-moz-border-radius-bottomright: 5px;
			-moz-border-radius-bottomleft: 5px;
			border-bottom-right-radius: 5px;
			border-bottom-left-radius: 5px;
			
			border:1px solid #000;
		}
	</style>
</head>
<body>
	<div class="error"><?php echo $this->scope["lang"]["error_head"];?></div>
	<div class="yellow"><?php echo $this->scope["content"]["msg"];?></div>
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>