<?php

if ( isset($_POST['submit']) ){
	$username = htmlentities ($_POST['username']);
	$password = htmlentities($_POST['password']);


	if ( $username === "gosho" && $password === "dude1234"){
		header('Location:index.php?page=auth_success', true, 302);
	} else {
		$error = 'invalid data!';
	}
} else {
	$name ='';
	$pass = '';
	$error = '';
}

?>

<script>document.title = 'Login'</script>

<form action="./login.php" method="POST">
	<label for="usernameInput">Login</label>
	<input type="text" name="username" id="usernameInput" />
	<br /><br />
	<label for="userPassword">Password</label>
	<input type="password" name="password" id="userPassword">
	<br /><br /> 
	<input type="submit" name="submit" value="OK" />
	
	<span style="color: red"><?php echo "<br /><br />" . $error; ?></span>
</form>

<a href="?page=homepage">Back to home</a>

