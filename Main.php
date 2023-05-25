<!DOCTYPE html>
<html>
<head>
	<title>Naam en leeftijd</title>
</head>
<body>
	<form method="post" action="">
		<label for="naam">Naam:</label>
		<input type="text" id="naam" name="naam"><br><br>
		<label for="leeftijd">Leeftijd:</label>
		<input type="number" id="leeftijd" name="leeftijd"><br><br>
		<input type="submit" name="submit" value="Verzenden">
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$naam = $_POST['naam'];
	$leeftijd = $_POST['leeftijd'];
	echo "Je naam is " . $naam . " en je bent " . $leeftijd . " jaar oud.";
}
?>