<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" type="text/css" href="<?php print(_APP_URL); ?>/css/login_style.css">
</head>
<body>

	<div id="container">
		<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
			<h1>Logowanie</h1>
			<div id="box">
				<div id="login-box">
					<label for="id_login">login: </label>
					<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
				</div>
				<div id="password-box">
					<label for="id_pass">password: </label>
					<input id="id_pass" type="password" name="pass" />
				</div>
			</div>
			<div id="control-button">
				<button id="login_button" >Zaloguj</button>
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