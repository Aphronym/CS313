<?php
	
	echo $_POST['name'];
	echo "<br />";
	echo $_POST["email"];
	
	if (isset($_POST["major"]))
	{
		print $_POST["major"];
	}
	
	if (isset($_POST["checkboxvar"]))
	{
		print $_POST["checkboxvar"];
	}
	
?>
