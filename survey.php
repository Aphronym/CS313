<?php
	session_start();
	if ($_SESSION["voted"] == "yes")
	{
		header('Location: results.php');
		die();
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>PHP Survey</title>
	</head>

<body>
	
	<!-- Begin JavaScript -->
	<script>
		function selected(x)
		{
			
			x.style.color = "#ececec";
		}
		
		function disguise(x)
		{
			x.style.color = "#606060";
		}
		function revert(x)
		{
			x.style.color = "#000000";
		}
		function focus(x)
		{
			x.style.backgroundColor = "#606060";
		}
	</script>
	
	<div class="top">
		<h1 onmouseover="disguise(this)">Aphronymous</h1>
	</div>
	
	<div class="middle">
		<form method="POST" id="userform" action="results.php">
			<table>
				<tr>
					<td><label>Name:</label></td>
					<td><input type="text" id="name" name="name" onfocus="focus(this)" /></td>
				</tr>
				<tr>
					<td><label>City:</label></td>
					<td><input type="text" id="city" name="city" onfocus="focus(this)" /></td>
				</tr>
				<tr>
					<td><label>Favorite Word:</label></td>
					<td><input type="text" id="favorite" name="favorite" onfocus="focus(this)"/></td>
				</tr> 
				<tr>
					<td><label>Least Favorite Word:</label></td>
					<td><input type="text" id="least" name="least" onfocus="focus(this)" /></td>
				</tr>
			</table>
			
			<br />
			<label>Would You Rather Read...</label><br />
				<input type="radio" name="read" id="bookr" onclick="selected(book)" value="books"/><label id="book" onmouseover="revert(this)">A book</label><br />
				<input type="radio" name="read" id="poemr" onclick="selected(poem)" value="poems"/><label id="poem" onmouseover="revert(this)">A poem</label><br />
				<input type="radio" name="read" id="lyricsr" onclick="selected(lyrics)" value="song lyrics"/><label id="lyrics" onmouseover="revert(this)">Song Lyrics</label><br />
				<input type="radio" name="read" id="mindsr" onclick="selected(minds)" value="minds"/><label id="minds" onmouseover="revert(this)">Minds</label><br />
				<input type="radio" name="read" id="notr" onclick="selected(not)" value="nothing"/><label id="not" onmouseover="revert(this)">Nothing</label><br />
			
			<br />
			<label>I Would Shoot...</label><br />
				<input type="radio" name="shoot" id="guncb" onclick="selected(gun)" value="guns" /><label id="gun" onmouseover="revert(this)">A gun</label><br />
				<input type="radio" name="shoot" id="dinnercb" onclick="selected(dinner)" value="my dinner" /><label id="dinner" onmouseover="revert(this)">My dinner</label><br />
				<input type="radio" name="shoot" id="targetcb" onclick="selected(target)" value="targets" /><label id="target" onmouseover="revert(this)">A target</label><br />
				<input type="radio" name="shoot" id="photocb" onclick="selected(photo)" value="photo ops" /><label id="photo" onmouseover="revert(this)">A photo op</label><br />
			
			<br />
			<label>I Would Best Run...</label><br />
				<input type="radio" name="run" id="marathoncb" onclick="selected(marathon)" value="a marathon" /><label id="marathon" onmouseover="revert(this)">A marathon</label><br />
				<input type="radio" name="run" id="companycb" onclick="selected(company)" value="a company" /><label id="company" onmouseover="revert(this)">A company</label><br />
				<input type="radio" name="run" id="armscb" onclick="selected(arms)" value="into your arms" /><label id="arms" onmouseover="revert(this)">Into your arms</label><br />
				<input type="radio" name="run" id="awaycb" onclick="selected(away)" value="away" /><label id="away" onmouseover="revert(this)">Away</label><br />
				<input type="radio" name="run" id="outcb" onclick="selected(out)" value="out of supplies" /><label id="out" onmouseover="revert(this)">Out of supplies</label><br />
				<input type="radio" name="run" id="fuelcb" onclick="selected(fuel)" value="on low fuel" /><label id="fuel" onmouseover="revert(this)">On low fuel</label><br />
		
			<br />	
			<button type="submit">Submit</button>
			<a href="results.php">View Results</a>
		</form>
	</div>
		
</body>

</html>
