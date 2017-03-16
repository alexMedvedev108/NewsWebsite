<?php 
	defined('PI') or die('<img style="width: 100%" src="./assets/imgs/404.png" alt="" />');
?>

	<script>document.title = 'Login'</script>
	
	<div class="login-page">
		<div class="form">
			<form action="./?page=login" method="post" class="login-form">
				<input type="text" placeholder="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>" />
				<input type="password" placeholder="password" name="password" />
				<button type="submit" name="submit" class="hvr-sweep-to-bottom">Login</button>
				<p class="message">Not registered? <a href="http://localhost/NewsWebsite/?page=register">Create an account</a></p>


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
				$errorMessage = implode("<br/>", $error);
				echo '<hr /><p class = "errorMessage">' . $errorMessage . '</p>';
			}
		}
		
	}
?>

		</form>
	</div>
</div>