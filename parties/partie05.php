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
			$requete = "SELECT partie_1, categorie_a, souscategorie_13, branche_e, branche_f, branche_g, souscategorie_14, 
			branche_h, sousbranche_7, sousbranche_8, sousbranche_9, souscategorie_15, branche_i, branche_j, branche_k, 
			branche_l, branche_m, categorie_b, souscategorie_1, souscategorie_2, souscategorie_3, souscategorie_4, 
			souscategorie_5, souscategorie_6, souscategorie_7, souscategorie_8 FROM chapitre_03";

			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_1 = $row["partie_1"];
				$categorie_a = $row["categorie_a"];
				$souscategorie_13 = $row["souscategorie_13"] ;
				$branche_e = $row["branche_e"];
				$branche_f = $row["branche_f"];
				$branche_g = $row["branche_g"];
				$souscategorie_14 = $row["souscategorie_14"] ;
				$branche_h = $row["branche_h"];
				$sousbranche_7 = $row["sousbranche_7"];
				$sousbranche_8 = $row["sousbranche_8"];
				$sousbranche_9 = $row["sousbranche_9"];
				$souscategorie_15 = $row["souscategorie_15"] ;
				$branche_i = $row["branche_i"];
				$branche_j = $row["branche_j"];
				$branche_k = $row["branche_k"];
				$branche_l = $row["branche_l"];
				$branche_m = $row["branche_m"];
				$categorie_b = $row["categorie_b"] ;
				$souscategorie_1 = $row["souscategorie_1"] ;
				$souscategorie_2 = $row["souscategorie_2"] ;
				$souscategorie_3 = $row["souscategorie_3"] ;
				$souscategorie_4 = $row["souscategorie_4"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$souscategorie_8 = $row["souscategorie_8"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> I - Les sources du droit communautaire</h3>	
		<?php
			if ($partie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement03.php">
			<textarea id="partie_1" name="partie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Le droit primaire</u></h4>	
		<?php
			if ($categorie_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_a, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement03.php">
			<textarea id="categorie_a" name="categorie_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Les traités de Rome</h4>	
		<?php
			if ($souscategorie_13 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_13, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_13" name="souscategorie_13" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le traité instituant la Communauté européenne du charbon et de l'acier - CECA</u></h5>	
		<?php
			if ($branche_e != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_e, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="branche_e" name="branche_e" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le traité instituant la Communauté économique européenne - CEE (Le traité de Rome)</u></h5>
		<?php
			if ($branche_f != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_f, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement03.php">
			<textarea id="branche_f" name="branche_f" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le traité instituant la Communauté européenne de l'énergie atomique CEEA</u></h5>		
		<?php
			if ($branche_g != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_g, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="branche_g" name="branche_g" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Le traité de Maastricht</h4>		
		<?php
			if ($souscategorie_14 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_14, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_14" name="souscategorie_14" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> L'Union Européenne est divisée en trois Piliers</u></h5>		
		<?php
			if ($branche_h != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_h, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="branche_h" name="branche_h" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Communautés européennes</font> </h5>
		<?php
			if ($sousbranche_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_7, ENT_NOQUOTES))."</p>";
			} else {
		?>										
		<form method="post" action="traitement03.php">
			<textarea id="sousbranche_7" name="sousbranche_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Politique étrangère et de sécurité commune (PESC)</font> </h5>	
		<?php
			if ($sousbranche_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_8, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement03.php">
			<textarea id="sousbranche_8" name="sousbranche_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Justice et affaires intérieures (JAI)</font> </h5>		
		<?php
			if ($sousbranche_9 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_9, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement03.php">
			<textarea id="sousbranche_9" name="sousbranche_9" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Les traités modificateurs</h4>				
		<?php
			if ($souscategorie_15 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_15, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_15" name="souscategorie_15" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les traités d'adhésion des nouveaux pays membres</u></h5>	
		<?php
			if ($branche_i != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_i, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement03.php">
			<textarea id="branche_i" name="branche_i" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le traité de fusion (des exécutifs)</u></h5>		
		<?php
			if ($branche_j != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_j, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="branche_j" name="branche_j" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> L'Acte unique européen</u></h5>			
		<?php
			if ($branche_k != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_k, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement03.php">
			<textarea id="branche_k" name="branche_k" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le traité d'Amsterdam</u></h5>			
		<?php
			if ($branche_l != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_l, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement03.php">
			<textarea id="branche_l" name="branche_l" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Le traité de Nice</u></h5>		
		<?php
			if ($branche_m != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_m, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="branche_m" name="branche_m" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<h4><u> B - Le droit privé</u></h4>	
		<?php
			if ($categorie_b != "") {
				echo htmlspecialchars_decode($categorie_b, ENT_NOQUOTES);
			} else {
		?>						
		<form method="post" action="traitement03.php">
			<textarea id="categorie_b" name="categorie_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Le règlement</h4>	
		<?php
			if ($souscategorie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_1" name="souscategorie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La directive</h4>	
		<?php
			if ($souscategorie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_2" name="souscategorie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - La décision</h4>	
		<?php
			if ($souscategorie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_3" name="souscategorie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 4 - La recommandation et l'avis</h4>	
		<?php
			if ($souscategorie_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_4, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_4" name="souscategorie_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 5 - La jurisprudence de la Cour de justice des communautés européennes - CJCE - et du Tribunal de première instance des communautés européennes - TPICE²</h4>	
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 6 - Les principes généraux du droit et le droit international coutumier</h4>	
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 7 - Les traités internationaux signés par la Communauté européenne</h4>	
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 8 - Les accords signés entre les Etats membres</h4>	
		<?php
			if ($souscategorie_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_8, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement03.php">
			<textarea id="souscategorie_8" name="souscategorie_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

	</body>
</html>