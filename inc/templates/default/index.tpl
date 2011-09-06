<!DOCTYPE HTML>
<html>
<head>
	<title>{$settings.site_name} - {$lang.homepage}</title>
	<link rel="stylesheet" href="css/{$settings.theme}/global.css" />
	{include(file='headerinclude.tpl')}
</head>
<body>
	{include(file='header.tpl')}
	<div class="scontent">
		<div class="topbar">&nbsp;</div>
		<div class="boxcontent" style="padding:0px;"> 
			<div class="item video" onmouseover="showInfot('1');" onmouseout="hideInfot('1');" onmousedown="showPlayer('Video name', 'x');">
				<span class="thumbs">
					<a href="#"><img src="img/up.gif" alt="up" height="16" title="76" /></a>
					<a href="#"><img src="img/down.gif" alt="up" height="16" title="76" /></a>
				</span>
				<span class="title">Video name</span>
				<span class="author">von Drilon</span>
				<span class="infot" id="infot1">hochgeladen am 27.03.2011 und wurde 25x angesehen</span>
			</div>
			<div class="item audio">
				<span class="thumbs">
					<a href="#"><img src="img/up.gif" alt="up" height="16" title="76" /></a>
					<a href="#"><img src="img/down.gif" alt="up" height="16" title="76" /></a>
				</span>
				<span class="title">Mp3 Name</span>
				<span class="author">von Drilon</span>
			</div>
			<div class="item doc">Blaaaa</div>
			<div class="item photo">Blaaaaaaa</div>
		</div>
	</div>
	<div class="newsfeed">
		<div class="topbar">&nbsp;Neuigkeiten</div>
		<div class="boxcontent">&nbsp;</div>
	</div>
	{include(file='footer.tpl')}
</body>
</html>