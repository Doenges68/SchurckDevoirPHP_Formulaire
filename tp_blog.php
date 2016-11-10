<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>TP PHP</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>


<body>
	<?php 

	$filepath = 'compteur.txt';
	if (file_exists($filepath)){
		$handle = fopen($filepath, 'r+');
		if ($handle)
		{
			while (!feof($handle))
			{
				$buffer = fgets($handle);
				echo "$buffer</br>";
			}
			fclose($handle);
		}
	}
		else
		{
			$handle = fopen(compteur.txt, 'w+');
		}

	?>
	<form action="tp_cible.php" method="POST">
		<div>
			<h1><center>Test envoie/réception de formulaire</center></h1>
					<p>
						<label for="pseudo"><center>Votre pseudo : </label><input type="text" name="pseudo" /></center>
							<br/>
							<br/>
						<label for="titre"><center>Votre titre : </label><input type="text" name="titre" /></center>
							<br/>
							<br/>
						<label for="message"><center>Votre message : </label><input type="textarea" size="50" style="height:100px;" name="message" /></center>
							<br/>
							<br/>
								<center><input type="submit" value="Envoyer le message" /></center>
					</p>
		</div>
	</form>
</body>
</html>