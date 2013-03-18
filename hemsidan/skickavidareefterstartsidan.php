<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="magnum" type="text/css" href="../CSS/magnum.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Skriv namnet på sidan här!</title>	
    </head>
    <body>
			<?PHP
			include '../hemsidan/inloggadornot.php';
			$addtotable = "INSERT INTO `spelet`.`figuren` (`ID`, `namn`, `ålder`, `kön`, `region`) VALUES (NULL, \'$_GET[namnet]\', \'$_GET[age]\', \'$_GET[gender]\', \'$_GET[region]\');";
			$result = mysql_query($addtotable);
			header('Location: http://localhost/HTS/hemsidan/keepongoing.php');
?>
				<p> &copy; 2013 Ditt namn här. Detta är en fotnot# 
				</p>
			</div>
        </div>
    </body>
</html>