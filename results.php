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

	$_SESSION["voted"] = "yes";
	$_SESSION["fname"] = $_POST["name"];
	$_SESSION["fromcity"] = $_POST["city"];
	$_SESSION["favword"] = $_POST["favorite"];
	$_SESSION["leastfav"] = $_POST["least"];
	$_SESSION["reader"] = $_POST["read"];
	$_SESSION["shooter"] = $_POST["shoot"];
	$_SESSION["runner"] = $_POST["run"];
	
	function noVote()
	{
		echo "<h1>Oops! You still need to vote!</h1>";
	}
		
	$name = $_POST["name"];
	$city = $_POST["city"];
	$favorite = $_POST["favorite"];
	$least = $_POST["least"];
	
	
	if (isset($_POST["read"]))
	{
		$read = $_POST["read"];
	}
	
	if (isset($_POST["shoot"]))
	{
		$shoot = $_POST["shoot"];
	}
	
	if (isset($_POST["run"]))
	{
		$run = $_POST["run"];
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
