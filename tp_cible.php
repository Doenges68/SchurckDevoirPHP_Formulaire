<?php
	date_default_timezone_set('Europe/Paris');
	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');
	$heure = date('H');
	$minute = date('i');
	
	$messages = fopen('compteur.txt', 'a+');
	
	if(!empty($_POST['pseudo']) AND !empty($_POST['titre']) AND !empty($_POST['message'])){
		
		fputs($messages, '<div><center><strong>'.htmlspecialchars($_POST['pseudo']).'</br></strong>');
		fputs($messages, '<strong>Titre : </strong>'.htmlspecialchars($_POST['titre']).'</br>');
		fputs($messages, $jour .'/'. $mois .'/'. $annee .'&nbsp&nbsp&nbsp'. $heure . 'h' . $minute."<br/>");
		fputs($messages, '</br></br>'.htmlspecialchars($_POST['message']).'</br></br></center></div></br>');
		
		echo '<script language = "javascript">document.location.href="tp_blog.php"</script>';
		
	}else{
		
		echo '<center>Veuillez remplir les cases vides !</center>';
		
	}
	
		fseek($messages, 0);
		$ligne = fgets($messages);
		echo $ligne;
		
		fclose($messages);
		
	unset($_POST['pseudo']);
	unset($_POST['titre']);
	unset($_POST['message']);
?>