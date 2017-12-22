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
			$requete = "SELECT partie_1, categorie_a, souscategorie_1, branche_a, branche_b, souscategorie_2, souscategorie_3, souscategorie_4, souscategorie_5, categorie_b, souscategorie_6, souscategorie_7, souscategorie_8, souscategorie_9 FROM chapitre_13";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_1 = $row["partie_1"];
				$categorie_a = $row["categorie_a"];
				$souscategorie_1 = $row["souscategorie_1"] ;
				$branche_a = $row["branche_a"];
				$branche_b = $row["branche_b"];
				$souscategorie_2 = $row["souscategorie_2"] ;
				$souscategorie_3 = $row["souscategorie_3"] ;
				$souscategorie_4 = $row["souscategorie_4"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$categorie_b = $row["categorie_b"] ;
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$souscategorie_8 = $row["souscategorie_8"] ;
				$souscategorie_9 = $row["souscategorie_9"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> I - La responsabilité des Etats</h3>					
		<?php
			if ($partie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="partie_1" name="partie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Les grands principes de la responsabilité des Etats</u></h4>						
		<?php
			if ($categorie_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_a, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="categorie_a" name="categorie_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Le fondement de la responsabilité des Etats</h4>							
		<?php
			if ($souscategorie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_1" name="souscategorie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La première se fonde sur une responsabilité objective</u></h5>								
		<?php
			if ($branche_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_a, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="branche_a" name="branche_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La seconde, sur une responsabilité subjective</u></h5>								
		<?php
			if ($branche_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_b, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="branche_b" name="branche_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La responsabilité civile et pénale des Etats, de leurs dirigeants, préposés ou agents</h4>							
		<?php
			if ($souscategorie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_2" name="souscategorie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - L'imputabilité de la responsabilité des Etats</h4>							
		<?php
			if ($souscategorie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_3" name="souscategorie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 4 - Les causes de mise en jeu de la resonsabilité des Etats, du fait de préjudices causés aux ressortissants d'autres Etats</h4>							
		<?php
			if ($souscategorie_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_4, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_4" name="souscategorie_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 5 - La réparation par un Etat de la violation d'une obligation internationale</h4>							
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - La protection internationale des droits de l'homme et libertés fondamentales</u></h4>						
		<?php
			if ($categorie_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_b, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="categorie_b" name="categorie_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - La Déclaration universelle des droits de l'homme</h4>							
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La Conventions des Nations unies sur les droits de l'homme</h4>							
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Autres instruments internationaux des Nations unies concernant les droits de l'homme</h4>							
		<?php
			if ($souscategorie_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_8, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_8" name="souscategorie_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 4 - La Convention européenne de sauvegarde des droits de l'homme et des libertés fondamentales</h4>							
		<?php
			if ($souscategorie_9 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_9, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement13.php">
			<textarea id="souscategorie_9" name="souscategorie_9" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>