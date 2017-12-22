<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="favicon.ico" />
		<!--<link href="style.css" rel="stylesheet" media="all" type="text/css">-->
		<style>p { text-align: justify; }</style>
		<title>Le droit en école de commerce</title>
	</head>
	<body>
		<?php
			include_once('includes/connexion.php');
			$requete = "SELECT partie_2, categorie_c, souscategorie_6, souscategorie_7, categorie_d, souscategorie_8, souscategorie_9, souscategorie_10, branche_a, branche_b, branche_c, branche_d, branche_e, conclusion FROM chapitre_16";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_2 = $row["partie_2"];
				$categorie_c = $row["categorie_c"];
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$categorie_d = $row["categorie_d"];
				$souscategorie_8 = $row["souscategorie_8"] ;
				$souscategorie_9 = $row["souscategorie_9"] ;
				$souscategorie_10 = $row["souscategorie_10"] ;
				$branche_a = $row["branche_a"];
				$branche_b = $row["branche_b"];
				$branche_c = $row["branche_c"];
				$branche_d = $row["branche_d"];
				$branche_e = $row["branche_e"];
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> II - Les obligations nées de la pratique du droit des contrats</h3>					
		<?php
			if ($partie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="partie_2" name="partie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Les obligations nouvelles nées de la volonté des parties</u></h4>						
		<?php
			if ($categorie_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_c, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="categorie_c" name="categorie_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - La création de contrat sui generis</h4>							
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Les parties vont parfois dans l'exécution du contrat créer de nouvelles obligations que le juge ne pourra que reconnaître</h4>	
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Les obligations nées de l'interprétation du juge</u></h4>						
		<?php
			if ($categorie_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_d, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="categorie_d" name="categorie_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Le rôle du juge dans l'interprétation des contrats</h4>							
		<?php
			if ($souscategorie_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_8, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="souscategorie_8" name="souscategorie_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La définition d'obligation essentielles dans les contrats</h4>							
		<?php
			if ($souscategorie_9 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_9, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="souscategorie_9" name="souscategorie_9" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Les obligations nouvelles</h4>							
		<?php
			if ($souscategorie_10 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_10, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="souscategorie_10" name="souscategorie_10" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> L'obligation de sécurité</u></h5>								
		<?php
			if ($branche_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_a, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="branche_a" name="branche_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le développement jurisprudentiel des obligations d'information et de conseil démontre le souci de cette quête de justice contractuelle</u></h5>								
		<?php
			if ($branche_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_b, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="branche_b" name="branche_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> L'obligation de renseignement</u></h5>								
		<?php
			if ($branche_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_c, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="branche_c" name="branche_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le devoir de conseil</u></h5>								
		<?php
			if ($branche_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_d, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="branche_d" name="branche_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> L'obligation de mise en garde</u></h5>								
		<?php
			if ($branche_e != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_e, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="branche_e" name="branche_e" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> Conclusion </u></h4>						
		<?php
			if ($conclusion != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($conclusion, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>