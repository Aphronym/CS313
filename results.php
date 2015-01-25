<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Results</title>
	</head>
	
<body>
<?php

	if ($_POST["submit"] == "Submit")
	{
		$_SESSION["voted"] = "yes";
		$_SESSION["fname"] = $_POST["name"];
		$_SESSION["fromcity"] = $_POST["city"];
		$_SESSION["favword"] = $_POST["favorite"];
		$_SESSION["leastfav"] = $_POST["least"];
		$_SESSION["reader"] = $_POST["read"];
		$_SESSION["shooter"] = $_POST["shoot"];
		$_SESSION["runner"] = $_POST["run"];
	}
	
	if (isset($_POST["name"]))
	{
		$name = $_POST["name"];
	}
	else
	{
		$name = $_SESSION["fname"];
	}
	
	if (isset($_POST["city"]))
	{
		$city = $_POST["city"];
	}
	else
	{
		$city = $_SESSION["fromcity"];
	}
		
	if (isset($_POST["favorite"]))
	{
		$favorite = $_POST["favorite"];
	}
	else
	{
		$favorite = $_SESSION["favword"];
	}
		
	if (isset($_POST["least"]))
	{
		$least = $_POST["least"];
	}
	else
	{
		$least = $_SESSION["leastfav"];
	}
		
	if (isset($_POST["read"]))
	{
		$read = $_POST["read"];
	}
	else
	{
		$read = $_SESSION["reader"];
	}
		
	if (isset($_POST["shoot"]))
	{
		$shoot = $_POST["shoot"];
	}
	else
	{
		$shoot = $_SESSION["shooter"];
	}
	
	if (isset($_POST["run"]))
	{
		$run = $_POST["run"];
	}
	else
	{
		$run = $_SESSION["runner"];
	}
		
	echo "<div class='top'><h1>Results</h1></div>";
	
	echo "<div class='middle'>
			<p class='result'>
				Hello, my name is <span class='word'> $name </span>. I'm from 
				<span class='word'> $city </span>. More than anything I like
				reading <span class='word'> $read </span>. If I could shoot
				anything right now I'd shoot <span class='word'> $shoot </span>,
				or maybe a <span class='word'> $least </span>, But more than
				anything I'd like to run <span class='word'> $run </span> and
				give someone a <span class='word'> $favorite </span>.
			</p>
		 </div>";
		 
	$results = fopen("results.txt", "w+") or die ("Unable to open file!");
	fwrite($results, $name . "\n");
	fwrite($results, $city . "\n");
	fwrite($results, $read . "\n");
	fwrite($results, $shoot . "\n");
	fwrite($results, $least . "\n");
	fwrite($results, $run . "\n");
	fwrite($results, $favorite . "\n");
	fclose($results);
?>
</body>

</html>
