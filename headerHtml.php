
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./CSS/normalize.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="https://use.fontawesome.com/37e598f389.js" type="text/javascript"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="./CSS/main.css">
</head>
<body>
	<div class="content">
	<header>
		<div id="mainHeader">
			<nav>
				<ul id="topNavLeft">
					<li><a href="./" class="selected">recent</a></li>
					<li><a href="">most popular</a></li>
				</ul>
				<div id="logo">
					<h1>
						<!--<img src="./assets/logo.png" alt="" />  -->
						<a href="./">logo.</a>
					</h1>
				</div>
				<ul id="topNavRight">
				
				<?php 
					if ($_SESSION['user']) { 			
						echo ($_SESSION['admin'] == 1) ? '<a href="./?page=admin">Admin</a>' : "<li><span id='greet'>Hello, " . $_SESSION['user'] . "!</span></li>";
				?>	
					<li><a href="./?page=logout" title="Logout" id="logOut">Logout</a></li>
				<?php 
					} else { 
				?>
					<li><a href="./?page=register" title="Sign Up" id="signIn">Sign Up</a></li>
					<li><a href="./?page=login" title="Log In" id="logIn">Login</a></li>
				<?php 
					} 
				?>
					<li>
						<form>
		    				<input id="search" type="search" name="search" />
							<p></p>
						</form>
					</li>
				</ul>
			</nav>
		</div>
		<div id="subHeader">
			<nav>	
				<ul id="bottomNav">
					<li><a href="http://localhost/NewsWebsite/?page=politics" class="selected" >politics</a></li>
					<li><a href="http://localhost/NewsWebsite/?page=technology">technology</a></li>
					<li><a href="http://localhost/NewsWebsite/?page=sport">sport</a></li>
					<li><a href="http://localhost/NewsWebsite/?page=business">business</a></li>
					<li><a href="http://localhost/NewsWebsite/?page=entertainment">entertainment</a></li>
					<li><a href="">other</a></li>
				</ul>
			</nav>
		</div>
	</header>
	




