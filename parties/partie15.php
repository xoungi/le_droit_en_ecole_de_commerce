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
			$requete = "SELECT partie_3, categorie_e, souscategorie_5, souscategorie_6, categorie_f, souscategorie_7, souscategorie_8, branche_i, branche_j, branche_k, conclusion FROM chapitre_07";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_3 = $row["partie_3"];
				$categorie_e = $row["categorie_e"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$souscategorie_6 = $row["souscategorie_6"] ;
				$categorie_f = $row["categorie_f"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$souscategorie_8 = $row["souscategorie_8"] ;
				$branche_i = $row["branche_i"];
				$branche_j = $row["branche_j"];	
				$branche_k = $row["branche_k"];	
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> III - Les attributs de la personne</h3>	
		<?php
			if ($partie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement07.php">
			<textarea id="partie_3" name="partie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - La capacité</u></h4>
		<?php
			if ($categorie_e != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_e, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="categorie_e" name="categorie_e" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - La capacité des personnes physiques</h4>	
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La capacité des personnes morales</h4>	
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - Les droits de la personne</u></h4>	
		<?php
			if ($categorie_f != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_f, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement07.php">
			<textarea id="categorie_f" name="categorie_f" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Les droits patrimoniaux</h4>		
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Les droits extra-patrimoniaux</h4>	
		<?php
			if ($souscategorie_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_8, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="souscategorie_8" name="souscategorie_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les droits extra-patrimoniaux des personnes physiques</u></h5>	
		<?php
			if ($branche_i != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_i, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement07.php">
			<textarea id="branche_i" name="branche_i" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les droits extra-patrimoniaux des personnes morales</u></h5>	
		<?php
			if ($branche_j != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_j, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement07.php">
			<textarea id="branche_j" name="branche_j" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le droit d'ester en justice</u></h5>		
		<?php
			if ($branche_k != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_k, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="branche_k" name="branche_k" rows="5" cols="30"></textarea>
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
		<form method="post" action="traitement07.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>