<?php
	
	$shoot = $_POST["shoot"];
	
	echo $_POST["favorite"];
	echo "<br />";
	echo $_POST["least"];
	echo "<br />";
	
	if (isset($_POST["read"]))
	{
		echo $_POST["read"];
		echo "<br />";
	}
	
	if (isset($_POST["shoot"]))
	{
		foreach ($shoot as $value)
		{
			echo "$value <br />";
		}
	}
	
	if (isset($_POST["run"]))
	{
		echo $_POST["run"];
		echo "<br />";
	}
	
?>
