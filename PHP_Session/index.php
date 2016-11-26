<?php
	session_start();  //Avvia la sessione
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Esempio sessioni PHP</h1>
	<br>
	La sessione è

	<?php
		$username=$_SESSION["ses_username"];

		if(isset($username))
			echo "<span class='greenfont bold'>ATTIVA</span>. Username = $username <br>";
		else
			echo "<span class='redfont bold'>NON ATTIVA</span>.<br>";

		print_r($_SESSION);
	?>

	<br><br>

	<form action="session_start.php">
	    <input type="submit" value="Avvia la sessione" />
	</form>

	<form action="session_stop.php">
	    <input type="submit" value="Chiudi la sessione" />
	</form>

	</body>
</html>

