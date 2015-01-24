<?php
	
	$reader = test_input($_POST["read"]);
	$run = test_input($_POST["run"]);
	
	echo $_POST["favorite"];
	echo "<br />";
	echo $_POST["least"];
	echo "<br />";
	
	if (isset($reader) && $reader == "books")
	{
		echo "checked";
		echo $reader;
		echo "<br />";
	}
	
	if (isset($_POST["shoot"]))
	{
		echo $_POST["shoot"];
		echo "<br />";
	}
	
	if (isset($_POST["run"]))
	{
		echo $_POST["run"];
		echo "<br />";
	}
	
?>
