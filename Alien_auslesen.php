<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Von Aliens entführt - Ihre Entführung einsehen</title> 
</head>
<body bgcolor=#7a90c2>
<h1>Von Aliens entführt - Ihre Entführung einsehen</h1> 
<p style="font-size:20px; font-family: Arial; color:DarkBlue">Die Geschichte Ihrer Alienentführung: </p>
    <?php 
        $uebergeben_email = $_POST['email'];

    	define('host','localhost');
        define('user','tutorial');
        define('pass','Klavierkeks');
        define('db','alien');
        
        $db = mysqli_connect(host, user, pass, db);
        
        $result2=mysqli_query($db, "SELECT menge FROM aliensichtungen WHERE email LIKE '$uebergeben_email'");
        if (mysqli_num_rows($result2)===0)//mysqli_num_rows = Anzahl der Zeilen im Ergebnis .. 0 Zeilen = nix gefunden
        {
            echo "<font color='red'> ", "Die Eingegebene E-Mail Adresse hat keinen Datensatz", "</font>", "<br>"; 
            echo "___________________________________ <br>";
        }
        else
        {
        $ergebnis = mysqli_query($db, "SELECT * FROM aliensichtungen WHERE email LIKE '$uebergeben_email'");
        while($row = mysqli_fetch_object($ergebnis))
        {
            echo "<b> ","Name: ", "</b>";
            echo $row->nachname;
            echo " ", $row->vorname,"<br>"; 

            echo "<b> ", "Geschlecht: ", "</b>";
            echo "<font color='#FF0084'> ", $row->geschlecht, "</font>", "<br>"; 

            echo "<b>" ,"E-Mail: ", "</b>";
            echo "<font color='#840099'> ", $row->email, "</font>", "<br>";

            echo "<b>", "Entfuehrungsdaten: ", "</b>", "<br>"; 
            echo "<font color='#2cffbb'> ","-Datum: ", "</font>";
            echo " ", $row->datum, "<br>";
            echo "<font color='#2cffbb'> ","-Dauer: ", "</font>";
            echo " ", $row->laenge, "<br>";
            echo "<font color='#2cffbb'> ","-Aliens: ", "</font>";
            echo " ", $row->menge, "<br>";
            echo "<font color='#2cffbb'> ","-Aussehen: ", "</font>";
            echo " ", $row->aussehen, "<br>";
            echo "<font color='#2cffbb'> ","-Geschehen: ", "</font>";
            echo " ", $row->geschehen, "<br>";
            echo "<font color='#2cffbb'> ","-Anmerkungen: ", "</font>";
            echo " ", $row->anmerkung, "<br>"; 
            echo "<font color='#2cffbb'> ","-Thorsten: ", "</font>";
            echo " ", $row->thorsten, "<br> <br>"; 
            echo "___________________________________ <br>";
        } 
    } 
    ?>
    <a href="Alien_auslesen.html">Zurück</a> <br>
    <a href="Haupt.html">Zurück zur Startseite</a> <br>
</body>
</html>