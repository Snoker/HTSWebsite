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

$query = mysql_query("SELECT namn FROM test");
echo "hej\n";
echo $query;
while ($temp = mysql_fetch_array($query)) {
	echo $temp["namn"];
}

mysql_select_db($database="");
?>

<?php
   mysql_close($link);
?>