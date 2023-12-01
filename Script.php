<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> test </title>
</head>
<body>
	<?php 
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	if(empty($_POST['geschlecht']))
	{
		$geschlechtwahr = "";
	}
	else
	{
	$geschlechtwahr = $_POST['geschlecht'];
	}
	echo "Danke Für Ihren Bericht";

	switch($geschlechtwahr)
	{
		case'männlich':
			echo " Herr " . htmlspecialchars($nachname). ".<br>"; 
			break;
		case 'weiblich':
			echo " Frau " . htmlspecialchars($nachname) . ".<br>"; 
			break;
		case 'divers':
			echo " " . htmlspecialchars($nachname) . ".<br>"; 
			break;
		default:
			echo " " . htmlspecialchars($nachname) . " " . htmlspecialchars($vorname) .  "<br>";
			break;
	}
	$imgUrl = "botaabucetanareta-gato-thumbsup.gif"; 
	?>

<img src="<?= $imgUrl; ?>" height="213px" width="213px"> <br>

	<?php
	echo "<b> <font color='#FF0000'; font size=50px>", "Ihre Daten: ", "</font>", "</b>", "<br> <br>"; 
	
	$email = $_POST['email'];
	$datum = $_POST['datum'];
	$laenge = $_POST['laenge'];
	$menge = $_POST['menge'];
	$aussehen = $_POST['aussehen'];
	$geschehen = $_POST['geschehen'];

	if(empty($email))
	{
		echo "<font color='red'> ", "Eine E-mail muss immer eingegeben werden!", "</font>", "<br>"; 
		$imgUrl2 = "1169px-Achtung.svg.png"; 
	}
	else
	{
	echo "<b> E-Mail: </b>", $email, "<br>";
	echo "<b> Datum: </b>", $datum, "<br>";
	echo "<b> Dauer der Entführung: </b>", $laenge, "<br>";
	echo "<b> Alien Anzahl: </b>", $menge, "<br>";
	echo "<b> Aussehen: </b>", $aussehen, "<br>";
	echo "<b> Geschehen: </b>", $geschehen, "<br>";

	$anmerkung = $_POST['anmerkungen'];
	echo "<b> Anmerkungen: </b>", $anmerkung, "<br>";

	if(empty($_POST['thorsten']))
	{
		$thorsten = "nein";
	}
	else
	{
		$thorsten = $_POST['thorsten'];
	}

	if($thorsten == "ja")
	{ 
		$imgUrl2 = "alien-makhluk-hijau.gif"; 
	}
	else if($thorsten == "nein")
	{
		$imgUrl2 = "71-qhX3qV3L2.jpg";
	}
    }
	?>
	<img src="<?= $imgUrl2; ?>" height="213px" width="213px"> <br>
	<?php
	if(empty($email))
	{
		echo "___________________________________ <br>";
	}
	else
	{
	define('host','localhost');
	define('user','tutorial');
	define('pass','Klavierkeks');
	define('db','alien');


	$db = mysqli_connect(host, user, pass, db);
	if(!$db)
	{
		echo "Es besteht keine Verbindung zur Datenbank <br>";
	}
	else
	{
		echo "Hat geklappt";
	}

	$eintrag = "INSERT INTO aliensichtungen (nachname, vorname, geschlecht, email, datum, laenge, menge, aussehen, geschehen, anmerkung, thorsten) VALUES ('$nachname', '$vorname', '$geschlechtwahr', '$email', '$datum', '$laenge', '$menge', '$aussehen', '$geschehen', '$anmerkung', '$thorsten')";
	$eintragen = mysqli_query($db, $eintrag);
	echo "<br>___________________________________ <br>";
	}
	?>
	<a href="Alien.html">Zurück</a> <br>
	<a href="Haupt.html">Zurück zur Startseite</a> <br>
</body>
</html>