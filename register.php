<?php 
	defined('PI') or die('404 mozAk');
?>

<form action="./?page=register" method="post">
	<div class="input-group">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>" />
	</div>

	<div class="input-group">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" />
	</div>

	<div class="input-group">
		<input type="submit" name="submit" value="Register" />
	</div>
</form>

<?php
if (isset($_POST['submit'])) {

	if (isset($_POST['username']) && isset($_POST['password'])) {

		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);

		$error = array();

		if (strlen($username) < 4) {
			$error[] = "Username min length is 4";
		}

		if (strlen($password) < 8) {
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
			echo '<div class="error">'.implode("<br/>", $error).'</div>';
		}

	}
}
?>