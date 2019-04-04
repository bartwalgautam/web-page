<?php
include_once "index.php";
require_once "config1.php";
$loginURL =$gClient-> createAuthUrl();
?>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div id="login-box">
		<div class="left-box">
		<h1>Sign Up</h1>
		<form class="signup-form" action="includes/signup.inc.php" method="post">	
			<input type="text" name="first" placeholder="First Name"/>
			<input type="text" name="last" placeholder="Last Name"/>
			<input type="text" name="email" placeholder="E-mail"/>
			<input  type="text" name="uid" placeholder="Username"/>
			<input type="password" name="pwd" placeholder="Password"/><br>
			
			<button type="submit" name="submit" >Sign Up</button>
			</form>
		</div>
		
		<div class="right-box">
		<span class="Signinwith">Sign In With<br>Social Network</span>
			<button class="social facebook">Login with Facebook</button>
			<button class="social google" onclick="window.location = '<?php echo $loginURL ?>'">Login with Google</button>
		</div>
		<div class="or">OR</div>
	</div>
	</body>