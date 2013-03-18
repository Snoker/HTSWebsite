<?php
include '../hemsidan/connect.php';
include '../hemsidan/inloggadornot.php';
		$reggtry = "SELECT * FROM `inloggning` WHERE `Inloggningsnamn`=\"$_GET[Namnet]\"";;
		$film = mysql_query($reggtry);
		$num_rows1 = mysql_num_rows($film);
		if ($num_rows1>0){
		echo("Detta användarnamn finns redan, var vänlig välj ett annat");
		}
		else{
		
         $query = "INSERT INTO `spelet`.`inloggning` (`Inloggningsnamn` ,`Lösenord` ,`ID`)VALUES ('$_GET[Namnet]', '$_GET[Pw]', NULL);";
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when trying to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		
		 mysql_close($link);
		 header('Location: http://localhost/HTS/hemsidan/logga_in.php');
		 }
?>