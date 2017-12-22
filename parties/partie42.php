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
			$requete = "SELECT partie_3, souscategorie_6, souscategorie_7, categorie_f, categorie_g, conclusion FROM chapitre_20";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_3 = $row["partie_3"];
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$categorie_f = $row["categorie_f"] ;
				$categorie_g = $row["categorie_g"] ;
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> III - Les clauses relatives à la fin du contrat</h3>		
		<?php
			if ($partie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement20.php">
			<textarea id="partie_3" name="partie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Les clauses permettant la résolution amiable des conflits</u></h4>
		<?php
			if ($categorie_f != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_f, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement20.php">
			<textarea id="categorie_f" name="categorie_f" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<h4> 1 - Les clauses de règlement amiable préalable au contentieux</h4>							
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement20.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Les procédés de règlement du litige préalable au contentieux</h4>							
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement20.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<h4><u> B - Les clauses permettant le règlement aménagé des conflits</u></h4>	
		<?php
			if ($categorie_g != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_g, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement20.php">
			<textarea id="categorie_g" name="categorie_g" rows="5" cols="30"></textarea>
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
		<form method="post" action="traitement20.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>