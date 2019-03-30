<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- content security for android -->
		<!-- look here: http://stackoverflow.com/questions/30212306/no-content-security-policy-meta-tag-found-error-in-my-phonegap-application -->
		<meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; script-src * 'unsafe-inline';">
		<title>Register for Film Friction</title>
		<link href="mainstyle.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<!-- Password strength checker script -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
	</head>
<body>
	<?php include('header.php') ?>
	<div class="page-title">Register</div>
	<div class="main-container" style="display: flex;justify-content: center;align-items: center; height: 600px">
		<div class="reg-conatiner">
			<form action="" method="" id="" class="reg-form">
				<input type="text" name="" placeholder="Enter a username..." class="reg-field" required>
				<input type="text" name="" placeholder="Enter your email address..." class="reg-field" required>
				<input type="password" name="" id="password" placeholder="Enter a password..." class="reg-field" required style="margin-bottom: 0">
				<meter max="4" id="password-strength-meter" value="0"></meter>
				<p id="password-strength-text"></p>
				<input type="password" name="" placeholder="Repeat and confirm your password..." class="reg-field" required>
				<input type="submit" value="Sign Up" class="reg-button">
			</form>
			<script>
				var strength = {
				0: "Worst ☹",
				1: "Bad ☹",
				2: "Weak ☹",
				3: "Good ☺",
				4: "Strong ☻"
				}

				var password = document.getElementById('password');
				var meter = document.getElementById('password-strength-meter');
				var text = document.getElementById('password-strength-text');

				password.addEventListener('input', function(){
				var val = password.value;
				var result = zxcvbn(val);

				// Update the password strength meter
				meter.value = result.score;

				// Update the text indicator
				if(val !== "") {
					text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<span class='feedback'>" + result.feedback.warning + " " + result.feedback.suggestions + "</span"; 
				}
				else {
					text.innerHTML = "";
				}
				});
			</script>
			<div class="reg-info">
				<div class="reg-info-container">
					<p class="reg-info-title">Register for a free Film Friction account today!</p>
					<p class="reg-info-text">
						Simply enter a username, a strong password to secure your account and click 'Sign Up' to gain access to member only
						features including:
					</p>
					<ul class="reg-list">
						<li>Subscribing to your favourote RSS feeds on Film Friction</li>
						<li>Share your favourite fan edits on social media</li>
						<li>Rate and review fan edits listed on Film Friction</li>
						<li>Like and add your favourite fan edits to your profile</li>
						<li>And so much more!</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php') ?>
</body>
</html>
