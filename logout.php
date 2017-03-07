<?php 
	defined('PI') or die('404 mozAk');
?>

<?php
session_destroy();
header('Location: ./');
?>