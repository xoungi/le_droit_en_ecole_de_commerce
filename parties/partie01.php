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
			$requete = "SELECT partie_1, categorie_a, souscategorie_1, souscategorie_2, souscategorie_3, categorie_b, souscategorie_4, souscategorie_5, branche_1, branche_2 FROM chapitre_01";
			/*echo "<br>";
			echo $requete;
			echo "<br>";*/
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_1 = $row["partie_1"];
				$categorie_a = $row["categorie_a"];
				$souscategorie_1 = $row["souscategorie_1"] ;
				$souscategorie_2 = $row["souscategorie_2"] ;
				$souscategorie_3 = $row["souscategorie_3"] ;
				$categorie_b = $row["categorie_b"] ;
				$souscategorie_4 = $row["souscategorie_4"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$branche_1 = $row["branche_1"];
				$branche_2 = $row["branche_2"];
			}
		?>

		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> I - Les sources formelles du droit</h3>	
		<?php
			if ($partie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement01.php">
			<textarea id="partie_1" name="partie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Présentation des différents textes</u></h4>
		<?php
			if ($categorie_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_a, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement01.php">
			<textarea id="categorie_a" name="categorie_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Champs d'application</h4>
		<?php
			if ($souscategorie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement01.php">
			<textarea id="souscategorie_1" name="souscategorie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Procédures d'élaboration</h4>	
		<?php
			if ($souscategorie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement01.php">
			<textarea id="souscategorie_2" name="souscategorie_2" rows="5" cols="30"></textarea>
			<br>
		<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Conditions d'application</h4>
		<?php
			if ($souscategorie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement01.php">
			<textarea id="souscategorie_3" name="souscategorie_3" rows="5" cols="30"></textarea>
			<br>
		<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Hiérarchie des textes</u></h4>
		<?php
			if ($categorie_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_b, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement01.php">
			<textarea id="categorie_b" name="categorie_b" rows="5" cols="30"></textarea>
			<br>
		<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Le contrôle de constitutionnalité de la loi</h4>
		<?php
			if ($souscategorie_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_4, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement01.php">
			<textarea id="souscategorie_4" name="souscategorie_4" rows="5" cols="30"></textarea>
			<br>
		<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Le contrôle de la légalité du règlement</h4>	
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement01.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
		<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le recours par excès de pouvoir</u></h5>	
		<?php
			if ($branche_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_1, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement01.php">
			<textarea id="branche_1" name="branche_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> L'exception d'illégalité</u></h5>	
		<?php
			if ($branche_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_2, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement01.php">
			<textarea id="branche_2" name="branche_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>