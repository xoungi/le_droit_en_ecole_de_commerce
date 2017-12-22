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
			$requete = "SELECT partie_2, categorie_c, souscategorie_5, souscategorie_6, souscategorie_7, categorie_d, souscategorie_8, branche_a, sousbranche_1, sousbranche_2, sousbranche_3, 
			sousbranche_4, sousbranche_5, sousbranche_6, branche_b, sousbranche_7, sousbranche_8, sousbranche_9, souscategorie_9, branche_c, branche_d, souscategorie_10, conclusion FROM chapitre_05";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_2 = $row["partie_2"];
				$categorie_c = $row["categorie_c"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$categorie_d = $row["categorie_d"] ;
				$souscategorie_8 = $row["souscategorie_8"] ;
				$branche_a = $row["branche_a"];
				$sousbranche_1 = $row["sousbranche_1"];
				$sousbranche_2 = $row["sousbranche_2"];
				$sousbranche_3 = $row["sousbranche_3"];
				$sousbranche_4 = $row["sousbranche_4"];
				$sousbranche_5 = $row["sousbranche_5"];
				$sousbranche_6 = $row["sousbranche_6"];
				$branche_b = $row["branche_b"];
				$sousbranche_7 = $row["sousbranche_7"];
				$sousbranche_8 = $row["sousbranche_8"];
				$sousbranche_9 = $row["sousbranche_9"];
				$souscategorie_9 = $row["souscategorie_9"] ;
				$branche_c = $row["branche_c"];
				$branche_d = $row["branche_d"];
				$souscategorie_10 = $row["souscategorie_10"] ;
				$conclusion = $row["conclusion"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> II - L'organisation judiciaire française</h3>	
		<?php
			if ($partie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement05.php">
			<textarea id="partie_2" name="partie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - L'ordre administratif</u></h4>	
		<?php
			if ($categorie_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_c, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement05.php">
			<textarea id="categorie_c" name="categorie_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Les juridictions administratives de première instance</h4>	
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - La juridiction administrative d'appel</h4>		
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement05.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Le conseil d'Etat</h4>				
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement05.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> B - L'ordre judiciaire</u></h4>		
		<?php
			if ($categorie_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_d, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement05.php">
			<textarea id="categorie_d" name="categorie_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - Les juridictions de première instance</h4>	
		<?php
			if ($souscategorie_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_8, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="souscategorie_8" name="souscategorie_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les juridictions civiles</u></h5>	
		<?php
			if ($branche_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_a, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement05.php">
			<textarea id="branche_a" name="branche_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Le Tribunal d'instance - TI</font> </h5>	
		<?php
			if ($sousbranche_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_1, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_1" name="sousbranche_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Le Tribunal de commerce - TC</font> </h5>	
		<?php
			if ($sousbranche_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_2, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_2" name="sousbranche_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Le Conseil de prud'hommes</font> </h5>		
		<?php
			if ($sousbranche_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_3, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_3" name="sousbranche_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Le Tribunal des affaires de Sécurité sociale</font> </h5>	
		<?php
			if ($sousbranche_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_4, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_4" name="sousbranche_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Le Tribunal paritaire des baux ruraux</font> </h5>	
		<?php
			if ($sousbranche_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_5, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_5" name="sousbranche_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Le juge de proximité</font> </h5>
		<?php
			if ($sousbranche_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_6, ENT_NOQUOTES))."</p>";
			} else {
		?>										
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_6" name="sousbranche_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les juridictions pénales</u></h5>		
		<?php
			if ($branche_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_b, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="branche_b" name="branche_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Trois types d'infraction pénales :</font> </h5>									
		<h5> <font color="red"> Les contraventions</font> </h5>					
		<?php
			if ($sousbranche_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_7, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_7" name="sousbranche_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Les délits</font> </h5>		
		<?php
			if ($sousbranche_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_8, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_8" name="sousbranche_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Les crimes</font> </h5>		
		<?php
			if ($sousbranche_9 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_9, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement05.php">
			<textarea id="sousbranche_9" name="sousbranche_9" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Les juridictions d'appel</h4>	
		<?php
			if ($souscategorie_9 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_9, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="souscategorie_9" name="souscategorie_9" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Au civil : la Cour d'appel</u></h5>		
		<?php
			if ($branche_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_c, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="branche_c" name="branche_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Au pénal : la chambre des appels correctionnels</u></h5>
		<?php
			if ($branche_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_d, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement05.php">
			<textarea id="branche_d" name="branche_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - La Cour de cassation</h4>	
		<?php
			if ($souscategorie_10 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_10, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="souscategorie_10" name="souscategorie_10" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u>Conclusion </u></h4>		
		<?php
			if ($conclusion != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($conclusion, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement05.php">
			<textarea id="conclusion" name="conclusion" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>