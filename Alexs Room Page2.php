<html>
	<title>Alex's Room</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="10" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<div class="w3-container w3-teal"><h1 style="text-align:left;font-family:Roboto;font-size:40px">Data from Alex's Room:</h1></div>
  <div class="w3-bar w3-teal">
  	<a href="Alexs Room.php" class="w3-button">Home Page</a>
  	<a href="Alexs Room Page2.php" class="w3-button">Game Data</a>
	</div>
	<p1><?php
	$myfile = fopen("C:\Users\Alexander\Desktop\CSGO GSI\csgo-gsi-qsguide-master\Current Game Files\currentgame.txt", "r") or die("Unable to open file!");
	$activegame='';
	if (fgets($myfile) == "csgo") {
		$activegame = "Counter Strike Global Offensive";
	} elseif (fgets($myfile) == "fortnite") {
		$activegame = "Fortnite";
	} else {
		$activegame = "Unknown Game";
	}
	if ($activegame == "Counter Strike Global Offensive") {
		echo'<center><img src="http://1000logos.net/wp-content/uploads/2017/12/CSGO-logo-500x281.jpg" alt="csgo logo"><center>';
		//open csgo data and output
		echo("CSGO DATA WILL APPEAR HERE");
	}
	?></p1>
</html>
