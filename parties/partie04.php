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
			$requete = "SELECT partie_2, categorie_c, souscategorie_10, souscategorie_11, souscategorie_12, categorie_d, conclusion  FROM chapitre_02";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_2 = $row["partie_2"];
				$categorie_c = $row["categorie_c"] ;
				$souscategorie_10 = $row["souscategorie_10"] ;
				$souscategorie_11 = $row["souscategorie_11"] ;
				$souscategorie_12 = $row["souscategorie_12"] ;
				$categorie_d = $row["categorie_d"] ;
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr />
		<h3> II - Articulation du droit international et du droit interne</h3>		
		<?php
			if ($partie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement02.php">
			<textarea id="partie_2" name="partie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Théories définissant les relations entre le droit international et le droit interne </u></h4>
		<?php
			if ($categorie_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_c, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="categorie_c" name="categorie_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Le monisme (ou l'incorporation)</h4>		
		<?php
			if ($souscategorie_10 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_10, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_10" name="souscategorie_10" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Le dualisme (ou la transformation)</h4>	
		<?php
			if ($souscategorie_11 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_11, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_11" name="souscategorie_11" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - L'harmonisation (ou la coordination)</h4>	
		<?php
			if ($souscategorie_12 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_12, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_12" name="souscategorie_12" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Application du droit international par les juridictions étatiques ou nationales</u></h4>
		<?php
			if ($categorie_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_d, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="categorie_d" name="categorie_d" rows="5" cols="30"></textarea>
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
		<form method="post" action="traitement02.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>