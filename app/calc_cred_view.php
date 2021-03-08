<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php print(_APP_URL); ?>/css/style.css">
	<title>Kalkulator Kredytowy</title>
</head>
<body>
	<div id="container">
		<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
			<h1>Kalkulator Kredytowy</h1>
			<div id="amount-box">
				<label for="id_amount">Kwota pożyczki:</label>
				<input id="id_amount" type="text" name="amount" value="<?php if (isset($amount) ) print($amount); ?>" />
			</div>
			<div id="period-box">
				<label for="id_period">Termin spłaty (w latach): </label>
				<input id="id_period" type="text" name="period" value="<?php if (isset($period) ) print($period); ?>" />
			</div>
			<div id="rate-box">
				<label for="id_rate">Oprocentowanie(%): </label>
				<input id="id_rate" type="text" name="rate" value="<?php if (isset($rate) ) print($rate); ?>" />
			</div>
			
			<div id="button">
				<input type="submit" value="Oblicz ratę" />
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