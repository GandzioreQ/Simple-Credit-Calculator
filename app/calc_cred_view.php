<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator Kredytowy</title>
	<link rel="stylesheet" type="text/css" href="<?php print(_APP_URL); ?>/css/calc_style.css">
</head>
<body>

	<div id="container">
		<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
			<h1>Kalkulator Kredytowy</h1>
			<div id="box">
				<label for="id_amount">Kwota pożyczki:</label>
				<input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>" />
				<label for="id_period">Termin spłaty (w latach): </label>
				<input id="id_period" type="text" name="period" value="<?php out($period) ?>" />
				<label for="id_rate">Oprocentowanie(%): </label>
				<input id="id_rate" type="text" name="rate" value="<?php out($rate) ?>" />
			</div>
			
			<div id="button">
				<input type="submit" id="count-button" value="Oblicz ratę" />	
				<a href ="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="logout-button">Wyloguj</a>		
			</div>

			<div id="final-result">
				<?php if (isset($result)){ ?>
				<div id="final-result-style">
				<?php echo 'Rata miesięczna: '.$result; ?>
				</div>
				<?php } ?>
			</div>
				
		</form>	
		<div id="error">
			<?php
			//wyświeltenie listy błędów, jeśli istnieją
				if (isset($messages)) {
					if (count ( $messages ) > 0) {
						echo '<ol>';
						foreach ( $messages as $key => $msg ) {
							echo '<li>'.$msg.'</li>';
						}	
						echo '</ol>';
					}
				}
			?>

	</div>
	
	</div>
	
</body>

</html>