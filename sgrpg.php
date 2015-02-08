<?php
	function loadDatabase()
	{

		$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');

		if ($openShiftVar === null || $openShiftVar == "")
		{
			// Not in the openshift environment
			//echo "Using local credentials: "; 
			require("setLocalDatabaseCredentials.php");
		}
		else 
		{ 
			// In the openshift environment
			//echo "Using openshift credentials: ";

			$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
			$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
			$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
			$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
		} 
		//echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br >\n";

		$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
     
		return $db;

	}
	
	$db = loadDatabase();
	
	$statement = $db->query("SELECT input FROM user_input");
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);
	$next = $db->query("SELECT response FROM response");
	$results2 = $next->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>

<hmtl>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Conversation</title>
	</head>
	
<body>
	
	<div class="middle">
		<form action="sgrpg.php">			
			<?php
		
				foreach ($results as $user_input)
				{
					echo "<input type='radio' name='input' />" . $user_input['input'] . "<br />";
				}
				
				foreach ($results2 as $response)
				{
					$display = $response['response'] . "<br />";
				}
						
			?>
			<button type="submit" name="submit" value="Submit">Select</button>
		</form>
	</div>
		
</body>
	
</hmtl>
