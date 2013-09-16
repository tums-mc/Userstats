<!DOCTYPE html>

<html lang="de">
<head>
	<title>Deine Statistik</title>
</head>
<body>



<?php
$db = mysql_connect("localhost","ni12347_3sql13","PASSWORD") or
  die ("Verbindung fehlgeschlagen");

mysql_select_db("ni12347_3sql13",$db) or die("Konnte die Datenbank nicht waehlen.");

$username = $_POST[username];  //Spielername

mysql_query("SELECT * FROM userstats WHERE username = $username"); 


?>

              Hallo <? echo $username?>    <br />

              Hier sind ein paar Statistiken von dir:

              <table>
              	<tr>
              		<th>(Blockbild)</th>
              		<th>Blockname</th>
              		<th>ID</th>
              		<th>abgebaut</th>
              		<th>gesetzt</th>
              	</tr>

              	<tr>
            		<td>...</td>
            		<td>Stein</td>
            		<td>1</td>
            		<td><? echo "". $row['1']?></td>
            		<td>...</td>
            	</tr>
            	<tr>
            		<td>...</td>
            		<td>usw</td>
            		<td>usw</td>
            		<td><? echo "". $row['2']?></td>
            		<td>...</td>
            	</tr>
            	<tr>
            		<td>...</td>
            		<td>usw</td>
            		<td>usw</td>
            		<td><? echo "". $row['3']?></td>
            		<td>...</td>
            	</tr>
            	<tr>
            		<td>...</td>
            		<td>usw</td>
            		<td>usw</td>
            		<td><? echo "". $row['4']?></td>
            		<td>...</td>
            	</tr>
            	<tr>
            		<td>...</td>
            		<td>usw</td>
            		<td>usw</td>
            		<td><? echo "". $row['5']?></td>
            		<td>...</td>
            	</tr>
            	<tr>
            		<td>...</td>
            		<td>usw</td>
            		<td>usw</td>
            		<td><? echo "". $row['6']?></td>
            		<td>...</td>
            	</tr>





</body>
</html>
