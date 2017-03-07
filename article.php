<?php 
	defined('PI') or die('404 mozAk');
	if (!isset($_GET['statiq'])) {
		die('404 mozAk');
	}
	$number = $_GET['statiq'];
	$names = scandir('./articles');
	$moqtastatiq = false;
	for ($index = 2; $index < count($names); $index++) {
		$element = explode("-", $names[$index]);
		if ($number == $element[0]){
			$moqtastatiq = $names[$index];
			break;
		}
	}
	if(!$moqtastatiq){
		die('404 mozAk');
	}
	
	$statiqta = array();
	$file= fopen("./articles/" . $moqtastatiq, "r");
	while(!feof($file)){
		$statiqta[]= fgets($file);
	
	}
	fclose($file);
		
		$title = array_shift($statiqta);
		$author  = array_shift($statiqta);
		$text = implode("</br>", $statiqta);
		
	?>




<div>
	<?php 
		echo "$title";
	?>
</div>

<div>
	<?php 
		echo "$author";
	?>
</div>


<div>
	<?php 
		echo "$text";
	?>
</div>