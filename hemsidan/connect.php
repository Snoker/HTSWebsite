<?php
$server="localhost";
$user="root";
$password="";
$database="spelet";
$link = mysql_connect($server, $user, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($database); 
?>
