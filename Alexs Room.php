<!DOCTYPE html>
<html>
	<title>Alex's Room</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="10" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<div class="w3-container w3-teal"><h1 style="text-align:left;font-family:Roboto;font-size:40px">Data from Alex's Room:</h1></div>
	<div1><h2 style="text-align:center;font-family:sans-serif;font-size:72px;">Room State:</h2></div1>
	<p1><?php
	$myfile = fopen("C:\Users\Alexander\Desktop\CSGO GSI\csgo-gsi-qsguide-master\Current Game Files\currentgame.txt", "r") or die("Unable to open file!");
	if (fgets($myfile)== "No Game Open") {
		$rs=0;
	} else {
		$rs=1;
	}
	fclose($myfile);
	if ($rs == 1) {
		echo '<center><div style="text-align:center;font-family:Roboto;font-size:64px"><b>Busy</b></div><center>';
		echo'<img src="https://images.mydoorsign.com/img/md/S/Do-Not-Enter-Engraved-Sign-SE-1075_248.gif" alt="Do Not Enter">';
		echo '<div style="font-size:14">I am currently in a competitive game please do not enter!</div>';
		echo '<a href="Alexs Room Page2.php" class="w3-btn w3-teal">Click here for more info:</a>';
	} else {
		echo '<div style="text-align:center;font-family:Roboto;font-size:64px"><b>Free</b></div>';
		echo '<center><div class="tenor-gif-embed" data-postid="4768573" data-share-method="host" data-width="20%"  data-aspect-ratio="1.2028985507246377"><a href="https://tenor.com/view/heaven-opendoor-gif-4768573">Open Door GIF</a> from <a href="https://tenor.com/search/heaven-gifs">Heaven GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script><center>';
		echo '<div style="font-size:14">I am not in any competitive game feel free to come in</div>';
	}
	?></p1>
	<!--<div><p2><?php include('CSGODATA.txt'); ?></p2></div>-->
</html>
