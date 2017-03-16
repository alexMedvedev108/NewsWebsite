<?php
	defined('PI') or die('<img style="width: 100%" src="./assets/imgs/404.png" alt="" />');
?>

	<script>document.title = 'Register'</script>

	<div class="login-page">
		<div class="form">
			<form action="./?page=register" method="post" class="register-form">
				<input type="text" placeholder="name" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>" />
				<input type="password" placeholder="password" name="password" />
				<button type="submit" name="submit" class="hvr-sweep-to-bottom">Register</button>
				<p class="message">Already registered? <a href="http://localhost/NewsWebsite/?page=login">Sign In</a></p>


<?php
if (isset($_POST['submit'])) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = trim(htmlentities($_POST['username']));
		$password = trim(htmlentities($_POST['password']));
		
		$error = array();
		if (strlen($username) === 0 || strlen($password) === 0) {
			$error[] = "Some of the fields are empty";
		}
		if (strlen($username) > 0 && strlen($username) < 4) {
			$error[] = "Username min length is 4";
		}
		if (strlen($username) > 0 && strlen($password) < 8) {
			$error[] = "Password min length is 8";
		}
		if (count($error) == 0) {
			$file = fopen('users.txt', 'a+');
			$found = false;
			while (!feof($file)) {
				$line = explode("|||", fgets($file));
				if (strcasecmp($username, $line[0]) == 0) {
					$found = true;
					break;
				}
			}
			if ($found) {
				$error[] = "Already registered";
			} else {
				fwrite($file, implode("|||", array($username, $password, 0)).PHP_EOL);
				header('Location: ./');
				$_SESSION['user'] = $username;
			}
			fclose($file);
		}
		if (count($error) > 0) {
			$errorMessage = implode("<br/>", $error);
			echo '<hr /><p class = "errorMessage">' . $errorMessage . '</p>';
		}
	}
}
?>
		</form>
	</div>
</div>