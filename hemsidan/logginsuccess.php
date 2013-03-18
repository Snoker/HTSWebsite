<?php
include '../hemsidan/connect.php';
include '../hemsidan/inloggadornot.php';
         $logintry = "SELECT * FROM `inloggning` WHERE `Inloggningsnamn`=\"$_GET[Namnet_Loggain]\" and `Lösenord`=\"$_GET[Pw_loggain]\"";;
         $result = mysql_query($logintry);
		 $num_rows = mysql_num_rows($result);
		 if($num_rows!=0){
		 echo ("Du loggas in");
		    header('Location: http://localhost/HTS/hemsidan/startsida.php');
			$result=1;
		 }
		 else
		 {
		 $result=0;
		 echo ("Du kunde ej logga in!");
		 }
		 mysql_close($link);
?>