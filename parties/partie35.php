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
			$requete = "SELECT partie_2, categorie_c, souscategorie_3, souscategorie_4, souscategorie_5, categorie_d, souscategorie_6, souscategorie_7, conclusion FROM chapitre_17";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_2 = $row["partie_2"];
				$categorie_c = $row["categorie_c"] ;
				$souscategorie_3 = $row["souscategorie_3"] ;
				$souscategorie_4 = $row["souscategorie_4"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$categorie_d = $row["categorie_d"] ;
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> II - L'effet relatif des contrats</h3>					
		<?php
			if ($partie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="partie_2" name="partie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Les différents catégories de tiers</u></h4>						
		<?php
			if ($categorie_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_c, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="categorie_c" name="categorie_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Les tiers absolus</h4>							
		<?php
			if ($souscategorie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_3" name="souscategorie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Les tiers devenus parties</h4>							
		<?php
			if ($souscategorie_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_4, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_4" name="souscategorie_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Les créanciers chirographaires et les ayants cause à titre particulier</h4>							
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Les effets de contrats à l'égard des tiers</u></h4>						
		<?php
			if ($categorie_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_d, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="categorie_d" name="categorie_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Stipulation pour autrui (article 1121 du C. Civ.)</h4>							
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Promesse pour autrui</h4>							
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
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
		<form method="post" action="traitement17.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>