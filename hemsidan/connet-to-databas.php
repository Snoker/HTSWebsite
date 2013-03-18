<?php
$server="localhost";
$user="root";
$password="";
$database="spelet";

$link = mysql_connect($server, $user, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully to database server';

mysql_select_db($database);

$query = mysql_query('SELECT * FROM inloggning');
echo 'Hej';
while ($temp = mysql_fetch_array($query)) {
    echo '<ul>';
	echo '<li>';
	echo $temp['Inloggningsnamn'];
	echo '<li>';
	echo $temp['Lösenord'];
	echo '</ul>';
} 
  mysql_close($link);
?>
