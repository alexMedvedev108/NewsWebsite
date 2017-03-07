<?php 
	defined('PI') or die('404 mozAk');
?>
<script>document.title = 'Login'</script>

<form action="./?page=login" method="post">
	<div class="input-group">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>" />
	</div>

	<div class="input-group">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" />
	</div>

	<div class="input-group">
		<input type="submit" name="submit" value="Login" />
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

				if (strcasecmp($username, $line[0]) == 0 && strcasecmp($password, $line[1]) == 0) {
					$found = true;
					$admin = $line[2];
					break;
				}
			}

			if ($found) {
				$_SESSION['user'] = $username;
				$_SESSION['admin'] = $admin;
				if ($admin == 0) {
					header('Location: ./');
				} else {
					header('Location: ./?page=admin');
				}
			} else {
				$error[] = "User not found";
			}
			fclose($file);
		}

		if (count($error) > 0) {
			echo '<div class="error">'.implode("<br/>", $error).'</div>';
		}

	}
	
}



?>