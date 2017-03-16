<?php 
	defined('PI') or die('<img style="width: 100%" src="./assets/imgs/404.png" alt="" />');
	if($_SESSION['admin'] != 1){
		die('404 mozAk');
	}
?>

<a href="./?page=newarticle"> New Article  </a>




