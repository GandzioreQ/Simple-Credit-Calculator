<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator Kredytowy</title>
	<link rel="stylesheet" type="text/css" href="<?php print(_APP_URL); ?>/css/style.css">
</head>
	
<body>
	<div id="Start" class="header">
		<div class="nav-bar">
			<p>
				Orange Calculator
			</p>
			<ol>
				<li><a href="#Start">Start</a></li>
				<li><a href="#Calc">Kalkulator</a></li>
			</ol>
		</div>
	</div>
	<div class="box">
		<div class="section">
			<div class="container">
				<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
					<h1 id="Calc">Kalkulator Kredytowy</h1>
					<div class="box">
						<label for="id_amount">Kwota pożyczki:</label>
						<input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>" />
						<label for="id_period">Termin spłaty (w latach): </label>
						<input id="id_period" type="text" name="period" value="<?php out($period) ?>" />
						<label for="id_rate">Oprocentowanie(%): </label>
						<input id="id_rate" type="text" name="rate" value="<?php out($rate) ?>" />
					</div>
					
					<div class="button">
						<input type="submit" class="count-button" value="Oblicz ratę" />	
						
					</div>

					<div class="final-result">
						<?php if (isset($result)){ ?>
						<div class="final-result-style">
						<?php echo 'Rata miesięczna: '.$result; ?>
						</div>
						<?php } ?>
					</div>
						
				</form>	
				<div class="error">
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
		</div>	
	</div>
	<div class="footer">
		<p>	
			@ 2021 | Strona wykanana przez Daniel Gandyra 
		</p>
	</div>

</body>

</html>