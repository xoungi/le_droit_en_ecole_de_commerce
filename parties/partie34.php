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
			$requete = "SELECT partie_1, categorie_a, categorie_b, souscategorie_1, souscategorie_2, branche_a, branche_b, branche_c FROM chapitre_17";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_1 = $row["partie_1"];
				$categorie_a = $row["categorie_a"];
				$categorie_b = $row["categorie_b"];
				$souscategorie_1 = $row["souscategorie_1"] ;
				$souscategorie_2 = $row["souscategorie_2"] ;
				$branche_a = $row["branche_a"];
				$branche_b = $row["branche_b"];
				$branche_c = $row["branche_c"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> I - La force obligatoire des contrats </h3>					
		<?php
			if ($partie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="partie_1" name="partie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Principe d’interdiction de la révocation unilatérale</u></h4>						
		<?php
			if ($categorie_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_a, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="categorie_a" name="categorie_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Le cas de la révocation unilatérale exceptionnelle</u></h4>						
		<?php
			if ($categorie_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_b, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="categorie_b" name="categorie_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Révocation prévue par les parties</h4>							
		<?php
			if ($souscategorie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_1" name="souscategorie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Révocation permise par la loi</h4>							
		<?php
			if ($souscategorie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_2" name="souscategorie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Tout contrat à exécution successive conclu pour une durée indéterminée</u></h5>								
		<?php
			if ($branche_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_a, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="branche_a" name="branche_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Plusieurs lois destinées à protéger les consommateurs leurs accordent un droit de repentir dans un délai déterminé</u></h5>	
		<?php
			if ($branche_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_b, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="branche_b" name="branche_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les clauses abusives sont réputées non écrites</u></h5>								
		<?php
			if ($branche_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_c, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="branche_c" name="branche_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>