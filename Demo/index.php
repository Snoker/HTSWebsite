﻿<?php
include '../File/connect.php';
?>
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
        <div id="content">
            <div id="top">
               <div id="banner-left" >En banner till vänster?</div>
               <div id="banner-center" >En banner till mitten??</div>
               <div id="banner-right" >En banner till höger???</div>
            </div>
            <div id="left">
                     <div class="dokument-item">
						<?php
						$query = "SELECT * FROM test";
						//echo $query; 
						$result = mysql_query($query) or die('Could : ' . mysql_error());
						
						$num=mysql_numrows($result);
						if($num==0) {
		                     echo '<strong>Your question is empty</strong>';
						}
						else {
						echo "<ol>";
						for ($i=0;$i<$num;$i++) {
						     $temp = mysql_fetch_array($result);
		                     echo "<li>" . $temp["namn"] . "</li>";
	                    }
	                    echo "</ol>";
	                 }
                     ?>
					</div>
            </div>
            <div id="center">
				Mitten kolumnen!!
                <div id="info">
				<h1 class="dokument-item-header"> Webbsidans rubrik</h1>
				<p class="info">Inledning på webbsidan.</p>
</div>
</div>
            <div id="right">
					Höger kolumn!!!
            </div>

			<div id="footer">
				<p> &copy; 2013 Ditt namn här. Detta är en fotnot# 
				</p>
			</div>
        </div>
    </body>
</html>
<?php
   mysql_close($con);
?>