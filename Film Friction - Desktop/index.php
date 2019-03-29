<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- content security for android -->
		<!-- look here: http://stackoverflow.com/questions/30212306/no-content-security-policy-meta-tag-found-error-in-my-phonegap-application -->
		<meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; script-src * 'unsafe-inline';">
		<title>Film Friction</title>
		<link href="mainstyle.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>

	<body>
		<?php include('header.php') ?>
		<!-- New & Trending --> 
		<div class="main-container">
			<div class="container1-lr">
				<div class="div1">
					<div class="index-title">New and Trending</div>
					<img alt="" src="#">
				</div>
			</div>
			<div class="container2-lr">
				<div class="div2"></div>
				<div class="div3">
					<img alt="New and Trending RSS Feed" src="images/rss-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
			</div>
			<div class="container3-lr">
				<div class="div4">
					<img alt="New and Trending Channel Subscribe Button" src="images/sub-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
				<div class="div5"></div>
			</div>
			<div class="container4-lr">
				<div class="div6">
					<div class="chat-title">Chat Feed</div>
				</div>
			</div>
		</div>
		<!-- Hall of Fame -->
		<div class="main-container">
			<div class="container1-rl">
				<div class="div6">
					<div class="chat-title">Chat Feed</div>
				</div>
			</div>
			<div class="container2-rl">
				<div class="div4">
					<img alt="Hall of Fame Channel Subscribe Button" src="images/sub-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
				<div class="div5"></div>
			</div>
			<div class="container3-rl">
				<div class="div2"></div>
				<div class="div3">
					<img alt="Hall of Fame RSS Feed" src="images/rss-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
			</div>
			<div class="container4-rl">
				<div class="div1">
					<div class="index-title">Hall of Fame</div>
					<img alt="" src="#">
				</div>
			</div>
		</div>
		<!-- Hall of Shame -->
		<div class="main-container">
			<div class="container1-lr">
				<div class="div1">
					<div class="index-title">Hall of Shame</div>
					<img alt="" src="#">
				</div>
			</div>
			<div class="container2-lr">
				<div class="div2"></div>
				<div class="div3">
					<img alt="Hall of Shame RSS Feed" src="images/rss-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
			</div>
			<div class="container3-lr">
				<div class="div4">
					<img alt="Hall of Fame Channel Subscribe Button" src="images/sub-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
				<div class="div5"></div>
			</div>
			<div class="container4-lr">
				<div class="div6">
					<div class="chat-title">Chat Feed</div>
				</div>
			</div>
		</div>
		<!-- Coming Soon -->
		<div class="main-container">
			<div class="container1-rl">
				<div class="div6">
					<div class="chat-title">Chat Feed</div>
				</div>
			</div>
			<div class="container2-rl">
				<div class="div4">
					<img alt="Coming Soon Channel Subscribe Button" src="images/sub-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
				<div class="div5"></div>
			</div>
			<div class="container3-rl">
				<div class="div2"></div>
				<div class="div3">
					<img alt="Hall of Shame RSS Feed" src="images/rss-btn.png" style="max-width: 100%;max-height: 100%">
				</div>
			</div>
			<div class="container4-rl">
				<div class="div1">
					<div class="index-title">Coming Soon</div>
					<img alt="" src="#">
				</div>
			</div>
		</div>
		
		<?php include('footer.php') ?>
	</body>
</html>
