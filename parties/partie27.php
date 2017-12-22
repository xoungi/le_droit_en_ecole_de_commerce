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
			$requete = "SELECT partie_2, categorie_c, souscategorie_10, souscategorie_11, categorie_d, souscategorie_12, souscategorie_13, souscategorie_14, conclusion FROM chapitre_13";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_2 = $row["partie_2"];
				$categorie_c = $row["categorie_c"] ;
				$souscategorie_10 = $row["souscategorie_10"] ;
				$souscategorie_11 = $row["souscategorie_11"] ;
				$categorie_d = $row["categorie_d"] ;
				$souscategorie_12 = $row["souscategorie_12"] ;
				$souscategorie_13 = $row["souscategorie_13"] ;
				$souscategorie_14 = $row["souscategorie_14"] ;
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> II - Le régime des immunités et le système des juridictions internationales compétentes</h3>					
		<?php
			if ($partie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="partie_2" name="partie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Les immunités des Etats et de leurs agents</u></h4>						
		<?php
			if ($categorie_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_c, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="categorie_c" name="categorie_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - L'immunité des agents diplomatiques et consulaires des Etats</h4>							
		<?php
			if ($souscategorie_10 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_10, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_10" name="souscategorie_10" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - L'immunité des Etats</h4>							
		<?php
			if ($souscategorie_11 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_11, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_11" name="souscategorie_11" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Les juridictions internationales et nationales compétentes pour engager la responsabilité d'un Etat</u></h4>
		<?php
			if ($categorie_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_d, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="categorie_d" name="categorie_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - La Cour internationale de justice (CIJ)</h4>							
		<?php
			if ($souscategorie_12 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_12, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_12" name="souscategorie_12" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La Cour pénale internationale (CPI)</h4>							
		<?php
			if ($souscategorie_13 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_13, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_13" name="souscategorie_13" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Les juridictions étatiques françaises et la possible incrimination de crimes contre l'humanité commis par des personnes agissant pour le compte d'un gouvernement </h4>							
		<?php
			if ($souscategorie_14 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_14, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_14" name="souscategorie_14" rows="5" cols="30"></textarea>
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
		<form method="post" action="traitement13.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>