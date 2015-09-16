<?php
session_start();
if (isset($_SESSION['mail'])) {
    echo 'La variable prenom est déjà enregistrée !';
    // On est certain de pouvoir y accéder ici
}
else
{
?>
	<html>
    <head><!-- Tête de page -->
        <meta charset='utf-8'/><!-- Permet de lire tout type de langage  -->
		<link rel='stylesheet' href='index.css'/>
        <title>Espace Membre</title>
    </head>
		<body><!-- Corps de page -->
			<section class='section1'>																	
			<center><h4>Veuillez vous connecter pour accéder à cet espace</h4></center>
				<article id='article1'>
			</br>
			</br>
		</body>
	</html>
<?php
    header ("Refresh: 3;URL=index.html");
}
?>

