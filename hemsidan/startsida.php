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
	Welcome! Please fill in the details about your character!
		<?PHP
include '../hemsidan/inloggadornot.php';
$male_status = 'unchecked';
$female_status = 'unchecked';


if (isset($_GET['Submit1'])) {

	$selected_radio = $_GET['gender'];
	
		if ($selected_radio == 'male') {
			$male_status = 'checked';

		}
		else if ($selected_radio == 'female') {
			$female_status = 'checked';
		}
}

?>

<body>

<FORM NAME ="form1" METHOD ="GET" ACTION ="skickavidareefterstartsidan.php">

<INPUT TYPE = 'Radio' Name ='gender'  value= 'male' <?PHP print $male_status; ?>>Male

<INPUT TYPE = 'Radio' Name ='gender'  value= 'female' <?PHP print $female_status; ?>>Female
<br />
<INPUT TYPE= "text" name="namnet">Figurens namn!
<br />
<INPUT TYPE= "text" name="region">Figurens region!
<br />
<INPUT TYPE= "text" name="age">Figurens ålder!
<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Yes, u man or wimmen?!">

				<p> &copy; 2013 Hampus Sjöman.
				</p>
			</div>
        </div>
    </body>
</html>