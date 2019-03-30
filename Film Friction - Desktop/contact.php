<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- content security for android -->
		<!-- look here: http://stackoverflow.com/questions/30212306/no-content-security-policy-meta-tag-found-error-in-my-phonegap-application -->
		<meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; script-src * 'unsafe-inline';">
		<title>Contact Us</title>
		<link href="mainstyle.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script src="js/ff.js"></script>
	</head>
<body>
	<?php include('header.php') ?>
	<div class="page-title">Contact Us</div>
	<div class="main-container" style="display: flex;justify-content: center;align-items: center;height: 600px">
		<div class="contact-container">
			<form id="my_form" class="contact-form" onSubmit="submitForm(); return false;">
				<input type="text" id="n" placeholder="Enter your name..." name="yourname" class="contact-field" required>
				<input type="text" id="s" placeholder="Enter a subject..." name="yoursubject" class="contact-field" required>
				<input type="text" id="e" placeholder="Enter your email address..." name="youremail" class="contact-field" required>
				<textarea type="text" id="m" rows="10" placeholder="Enter your message..." name="yourmessage" class="contact-field" style="margin: 25px 15%; float: unset" required></textarea>
				<br>
				<input id="mybtn" type="submit" class="contact-button" value="Submit">
			</form>
		</div>
	</div>
	<?php include('footer.php') ?>
</body>
</html>