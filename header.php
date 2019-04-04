<?php
session_start();
?>
<html>
	<head>
	<style>
		
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<header>
	<div class="main">
		<ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">Gallery</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			
		</ul>
			<div class="main1">
				
				<?php
					if(isset($_SESSION['u_id'])){
						echo '<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="submit" class="sam"> Logout</button>
					</form>';
					}
					else{
						echo ' 
				<form action="includes/login.inc.php" method="post">
					<input type="text" name="uid" placeholder="username/e-mail">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="submit">login</button> 
					</form>
					<form action="signup.php" method="post">
						<button type="submit">Sign Up</button>
					</form>';
					}
					?>	
	</div>
		
	</div>
		
	<div class="title">
			<h1 >HOUSING.COM</h1>
		
			</div>	
	
	</header>