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
			$requete = "SELECT partie_2, categorie_c, souscategorie_1, branche_a, branche_b, souscategorie_2, branche_c, branche_d, categorie_d, 
			souscategorie_3, branche_e, branche_f, souscategorie_4, branche_g, branche_h FROM chapitre_07";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_2 = $row["partie_2"];
				$categorie_c = $row["categorie_c"] ;
				$souscategorie_1 = $row["souscategorie_1"] ;
				$branche_a = $row["branche_a"];
				$branche_b = $row["branche_b"];
				$souscategorie_2 = $row["souscategorie_2"] ;
				$branche_c = $row["branche_c"];
				$branche_d = $row["branche_d"];
				$categorie_d = $row["categorie_d"] ;
				$souscategorie_3 = $row["souscategorie_3"] ;
				$branche_e = $row["branche_e"];
				$branche_f = $row["branche_f"];		
				$souscategorie_4 = $row["souscategorie_4"] ;
				$branche_g = $row["branche_g"];
				$branche_h = $row["branche_h"];	
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> II - L'individualisation des personnes</h3>	
		<?php
			if ($partie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement07.php">
			<textarea id="partie_2" name="partie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - L'attribution de la personnalité juridique</u></h4>	
		<?php
			if ($categorie_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_c, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement07.php">
			<textarea id="categorie_c" name="categorie_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - L'acquisition de la personnalité juridique</h4>	
		<?php
			if ($souscategorie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_1" name="souscategorie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La naissance de la personne physique</u></h5>		
		<?php
			if ($branche_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_a, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="branche_a" name="branche_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La constitution de la personne morale</u></h5>	
		<?php
			if ($branche_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_b, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement07.php">
			<textarea id="branche_b" name="branche_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La perte de la personnalité juridique</h4>	
		<?php
			if ($souscategorie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_2" name="souscategorie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La mort</u></h5>					
		<?php
			if ($branche_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_c, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement07.php">
			<textarea id="branche_c" name="branche_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La disparition de la personne morale</u></h5>	
		<?php
			if ($branche_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_d, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement07.php">
			<textarea id="branche_d" name="branche_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - L'identification de la personne</u></h4>	
		<?php
			if ($categorie_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_d, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement07.php">
			<textarea id="categorie_d" name="categorie_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Le nom de la personne</h4>				
		<?php
			if ($souscategorie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_3" name="souscategorie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le nom de la personne physique</u></h5>	
		<?php
			if ($branche_e != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_e, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement07.php">
			<textarea id="branche_e" name="branche_e" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La dénomination de la personne morale</u></h5>	
		<?php
			if ($branche_f != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_f, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement07.php">
			<textarea id="branche_f" name="branche_f" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Le domicile de la personne</h4>		
		<?php
			if ($souscategorie_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_4, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_4" name="souscategorie_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le domicile de la personne physique</u></h5>
		<?php
			if ($branche_g != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_g, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement07.php">
			<textarea id="branche_g" name="branche_g" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le siège social de la personne morale</u></h5>
		<?php
			if ($branche_h != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_h, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement07.php">
			<textarea id="branche_h" name="branche_h" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>