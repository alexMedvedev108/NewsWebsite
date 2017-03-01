<?php include "./headerHtml.php"; ?>

<?php 
	if ( isset($_GET['page']) ){
		$page = $_GET['page'];
		$file = "./" . $_GET['page'] . ".php";
		
		if ( file_exists ($file) ) {
			include $file;
		} else {
			include "./notFound.php";
		}
	} else {
		include "./homepage.php";
	}
?>


<?php include "./footerHtml.php"; ?>

