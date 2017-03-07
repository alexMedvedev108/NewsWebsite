<?php 
	define('PI', 3.14);

	session_start();

	if (!isset($_SESSION['user'])) {
		$_SESSION['user'] = false;
	}

	if (!isset($_SESSION['admin'])) {
		$_SESSION['admin'] = 0;
	}
	
	include "./headerHtml.php";
	
	
	if ( isset($_GET['page']) ){
		$page = $_GET['page'];
		$file = "./" . $_GET['page'] . ".php";
		
		if ( file_exists ($file) ) {
			include $file;
		} else {
			include "./notFound.php";
		}
	} else {
		include "./politics.php";
	}
?>


<?php include "./footerHtml.php"; ?>

