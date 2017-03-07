<?php 
	
	defined('PI') or die('404 mozAk');
	if($_SESSION['admin'] != 1){
		die('404 mozAk');
	}

?>

<form action="./?page=newarticle" method="post">
	<div class="input-group">
		<label for="title">Title:</label>
		<input type="text" id="title" name="title" value=" CSKA  ">
	</div>
	<div>
		<label for="category"> Category: </label>
		<select name="category" id="category">
			<option value="1">Politics</option>
			<option value="2">Technology</option>
			<option value="3">Sport</option>
			<option value="4">Business</option>
			<option value="5">Entertainment</option>
			<option value="6">Other</option>
		</select>
	</div>
	<div> 
		<textarea name="text"></textarea>
	</div>
	<div>
		<input type="submit" name="submit" value="Submit">
		<input type="hidden" name="author" value="user2"> 
	</div>
</form>


<?php
		if (isset($_POST['submit'])){
			$broika = count(scandir("./articles")) -1;
			$name = $broika . "-" . $_POST['category'];
			$file = fopen("./articles/" . $name, "a+");
			fwrite($file, $_POST['title'] . PHP_EOL . $_POST['author'] . PHP_EOL . $_POST['text']);
			fclose($file);
			
			
			
		}
	




?>