<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil - GSB</title>
</head>
<body>
	<?php
		include('include/GSB_UpperBody.php');
	?>

	<h1 align="center">Bienvenue chez GSB</h1>

	<h2 align="center"><i>"Au coeur de la recherche dans le milieu pharmaceutique"</i></h2>
	<p><br></p>
	<?php
    echo "<p align='center'><i>Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom'].", votre numero de visiteur est le <b>".$_SESSION['num']."</b>.</i></p>";
	?></p>	

	<p><br></p>

	<div class="contenant">
		<img id="roue" src="../css//images/image_accueil.png" width="700" height="400">
		<img id="roue" src="../css//images/image_accueil2.png" width="700" height="400">
		<img id="roue" src="../css//images/image_accueil3.png" width="700" height="400">
	</div>

	<?php
		include('include/GSB_LowerBody.php');
	?>
</body>
</html>