<?php
	
	echo $_POST['favorite'];
	echo "<br />";
	echo $_POST['least'];
	
	if (isset($_POST['read']))
	{
		echo $_POST['read'];
		echo "<br />";
	}
	
	if (isset($_POST['shoot']))
	{
		echo $_POST['shoot'];
		echo "<br />";
	}
	
	if (isset($_POST['run']))
	{
		echo $_POST['run'];
		echo "<br />";
	}
	
?>
