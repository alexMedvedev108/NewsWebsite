<?php
	defined('PI') or die('<img style="width: 100%" src="./assets/imgs/404.png" alt="" />');
?>

<?php
session_destroy();
header('Location: ./');
?>