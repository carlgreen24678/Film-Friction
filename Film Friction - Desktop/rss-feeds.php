<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- content security for android -->
		<!-- look here: http://stackoverflow.com/questions/30212306/no-content-security-policy-meta-tag-found-error-in-my-phonegap-application -->
		<meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; script-src * 'unsafe-inline';">
		<title>RSS Feeds</title>
		<link href="mainstyle.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>
<body>
	<?php include('header.php') ?>
	<div class="page-title">RSS Feeds</div>
	<div class="main-container" style="display: flex;justify-content: center;align-items: center; height: auto">
		<div class="rss-main-container">
			<!-- New and Trending RSS -->
			<div class="rss-container">
				<div class="rss-title">New and Trending</div>
				<div class="rss-content">
					RSS Content here
				</div>
			</div>
			<!-- Hall of Fame RSS -->
			<div class="rss-container">
				<div class="rss-title">Hall of Fame</div>
				<div class="rss-content">
					RSS Content here
				</div>
			</div>
			<!-- Hall of Shame RSS -->
			<div class="rss-container">
				<div class="rss-title">Hall of Shame</div>
				<div class="rss-content">
					RSS Content here
				</div>
			</div>
			<!-- Up and Coming RSS -->
			<div class="rss-container">
				<div class="rss-title">Up and Coming</div>
				<div class="rss-content">
					RSS Content here
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php') ?>
</body>
</html>