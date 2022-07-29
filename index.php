<?php

/*
Antes de poder ejecutar este archivo, agregue primero

	[COM_DOT_NET]
	extension=php_com_dotnet.dll

 al final del archivo 'php.ini' 

 Xampp Windows = (Drive Letter):\xampp\php\php.ini
 
 */
@$submit = $_POST['process'];
@$word = $_POST['texttospeech'];

$voice = new COM("SAPI.SpVoice");

if($_SERVER["REQUEST_METHOD"] == "POST" and isset($submit) and !empty($word)){
	$voice->Speak($word);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<title>PHP Texto a Voz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body onload="startTime()">
		<nav class="navbar-inverse" role="navigation">
			
			<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
			</div>
		</nav>
		<div class="topmost">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center>
							<strong class="panelinputtitle">Convertidor de texto a voz PHP usando la API de voz de Microsoft</strong>
						</center>
					</div>
					<div class="panel-body">
						<form method= "post">
							<div class="form-group">
								<textarea class="form-control input-sm" rows="6" name="texttospeech" placeholder="Ingresa tu texto aquí..."></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class = "btn btn-primary btn-block" name="process" value="Hablar">
							</div>
						</form>
						<form method="post">
							<input type="hidden" name="texttospeech" value="Felicitaciones, estas utilizando la app de convertidor de voz con la API de Microsoft. Este script solo se ejecutaraá en un sistema operativo Windows">
							<button type="submit" name="process" class="btn btn-danger btn-block">Click aquí primero</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
