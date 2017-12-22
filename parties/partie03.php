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
			$requete = "SELECT partie_1, categorie_a, souscategorie_1, souscategorie_2, souscategorie_3, souscategorie_4, souscategorie_5, souscategorie_6, souscategorie_7,
			branche_a, branche_b, branche_c, categorie_b, souscategorie_8, souscategorie_9, branche_d, sousbranche_1, sousbranche_2, sousbranche_3, sousbranche_4, sousbranche_5,
			sousbranche_6 FROM chapitre_02";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$partie_1 = $row["partie_1"];
				$categorie_a = $row["categorie_a"];
				$souscategorie_1 = $row["souscategorie_1"] ;
				$souscategorie_2 = $row["souscategorie_2"] ;
				$souscategorie_3 = $row["souscategorie_3"] ;
				$souscategorie_4 = $row["souscategorie_4"] ;
				$souscategorie_5 = $row["souscategorie_5"] ;
				$souscategorie_6 = $row["souscategorie_6"] ;
				$souscategorie_7 = $row["souscategorie_7"] ;
				$branche_a = $row["branche_a"];
				$branche_b = $row["branche_b"];
				$branche_c = $row["branche_c"];
				$categorie_b = $row["categorie_b"] ;
				$souscategorie_8 = $row["souscategorie_8"] ;
				$souscategorie_9 = $row["souscategorie_9"] ;
				$branche_d = $row["branche_d"];
				$sousbranche_1 = $row["sousbranche_1"];
				$sousbranche_2 = $row["sousbranche_2"];
				$sousbranche_3 = $row["sousbranche_3"];
				$sousbranche_4 = $row["sousbranche_4"];
				$sousbranche_5 = $row["sousbranche_5"];
				$sousbranche_6 = $row["sousbranche_6"];
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h3> I - Les sources du droit interne et les sources du droit international</h3>
		<?php
			if ($partie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($partie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement02.php">
			<textarea id="partie_1" name="partie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4><u> A - Les sources de l'ordre juridique interne</u></h4>	
		<?php
			if ($categorie_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_a, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement02.php">
			<textarea id="categorie_a" name="categorie_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - La constitution</h4>		
		<?php
			if ($souscategorie_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_1" name="souscategorie_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Les traités</h4>
		<?php
			if ($souscategorie_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_2, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_2" name="souscategorie_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 3 - Les lois organiques</h4>		
		<?php
			if ($souscategorie_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_3, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_3" name="souscategorie_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 4 - Les lois ordinaires</h4>
		<?php
			if ($souscategorie_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_4, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_4" name="souscategorie_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 5 - Les ordonnances</h4>	
		<?php
			if ($souscategorie_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_5, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_5" name="souscategorie_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 6 - Les règlements</h4>	
		<?php
			if ($souscategorie_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_6, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_6" name="souscategorie_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 7 - Les sources secondaires et informelles</h4>	
		<?php
			if ($souscategorie_7 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_7, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_7" name="souscategorie_7" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La jurisprudence</u></h5>		
		<?php
			if ($branche_a != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_a, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="branche_a" name="branche_a" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La coutume</u></h5>		
		<?php
			if ($branche_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_b, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="branche_b" name="branche_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> La doctrine</u></h5>	
		<?php
			if ($branche_c != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_c, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement02.php">
			<textarea id="branche_c" name="branche_c" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4><u> B - Les sources de l'ordre juridique international</u></h4>		
		<?php
			if ($categorie_b != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($categorie_b, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement02.php">
			<textarea id="categorie_b" name="categorie_b" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 1 - La hiérarchie des normes</h4>				
		<?php
			if ($souscategorie_8 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_8, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_8" name="souscategorie_8" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h4> 2 - Le contenu des sources du droit international</h4>		
		<?php
			if ($souscategorie_9 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($souscategorie_9, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement02.php">
			<textarea id="souscategorie_9" name="souscategorie_9" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5><u> Les conventions internationales</u></h5>	
		<?php
			if ($branche_d != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($branche_d, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement02.php">
			<textarea id="branche_d" name="branche_d" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Traités multilatéraux</font> </h5>		
		<?php
			if ($sousbranche_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_1, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement02.php">
			<textarea id="sousbranche_1" name="sousbranche_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Traités bilatéraux</font> </h5>			
		<?php
			if ($sousbranche_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_2, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement02.php">
			<textarea id="sousbranche_2" name="sousbranche_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> La coutume internationale</font> </h5>
		<?php
			if ($sousbranche_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_3, ENT_NOQUOTES))."</p>";
			} else {
		?>										
		<form method="post" action="traitement02.php">
			<textarea id="sousbranche_3" name="sousbranche_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Les principes généraux du droit</font> </h5>	
		<?php
			if ($sousbranche_4 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_4, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement02.php">
			<textarea id="sousbranche_4" name="sousbranche_4" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> Les décisions de justice</font> </h5>	
		<?php
			if ($sousbranche_5 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_5, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement02.php">
			<textarea id="sousbranche_5" name="sousbranche_5" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<h5> <font color="red"> La doctrine</font> </h5>	
		<?php
			if ($sousbranche_6 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($sousbranche_6, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement02.php">
			<textarea id="sousbranche_6" name="sousbranche_6" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
	</body>
</html>