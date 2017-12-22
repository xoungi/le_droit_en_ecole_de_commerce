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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_06";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert = $row["avis_expert"] ;
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
				$axes_reflexions_2 = $row["axes_reflex_rep_q2"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr />
		<h2> 6 - Arbitrage et médiation </h2>
		<p>arbitrage interne et international, mode alternatif de règlement des litiges, médiation, droit applicable, loi-type, exécution des sentences arbitrales</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement06.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie11.php">Médiation et arbitrage en droit interne français</a></h3>
		<h4><u> A - La médiation en droit interne français</u></h4>
		<h4> 1 - La médiation au sein du cadre judiciaire</h4>
		<h4> 2 - La médiation hors du cadre judiciaire </h4>
		<h4><u> B - L'arbitrage en droit interne français</u></h4><br>
		<h3> II - <a href ="../parties/partie12.php">Médiation et arbitrage dans les litiges internationaux</a></h3>
		<h4><u> A - La médiation dans les litiges internationaux</u></h4>
		<h4><u> B - L'arbitrage international en droit français</u></h4>
		<h4> 1 - Champ d'application </h4>
		<h4> 2 - Règles de procédure et droit applicable au fond </h4>
		<h4><u> Conclusion </u></h4>
		<br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>		
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement06.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>	
		<p><b> Comment détermine t-on le droit applicable au fond du litige, dans une procédure d'arbitrage international ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement06.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br><h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<p> - Jurisprudence internationale</p>
		<h4> Sites Internet</h4>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement06.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4>
		<p> <b>
		1.	En cas de procédure d’arbitrage, quel serait le droit applicable par les arbitres au fond du litige ?</b><br>
		a)	le droit suisse<br>
		b)	le droit français<br>
		c)	le droit américain de l’Etat de Californie<br>
		d)	le droit international<br><br>
		<b>
		2.	En cas de différend entre les parties, celles-ci doivent préalablement :</b><br>
		a)	négocier une solution amiable<br>
		b)	avoir recours à une conciliation<br>
		c)	avoir recours à un arbitrage<br>
		d)	engager une action devant les tribunaux d’un Etat<br><br>
		<b>
		3.	En cas d’échec de la procédure de conciliation, les parties doivent :</b><br>
		a)	avoir recours à une procédure d’arbitrage<br>
		b)	engager une action devant les tribunaux de l’un des deux Etats (France ou Etats-Unis)<br>
		c)	négocier à nouveau<br>
		d)	renoncer à leurs droits<br><br>
		<b>
		4.	La procédure d’arbitrage devra être conforme :</b><br>
		a)	au droit américain<br>
		b)	au droit suisse cantonal<br>
		c)	au droit suisse fédéral et au droit français applicables en matières d’arbitrage international<br>
		d)	au droit international
		</p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement06.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Que prévoit la loi-type de la commission des Nations unies pour le droit du commerce international - CNUDCU - relative à l'arbitrage international ?</b></p>						
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement06.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><p> <b>Comment assurer l'exécution et le contrôle des sentences arbitrales internationales ?</b></p>						
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement06.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>
		
		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels et ouvrages</p>						
		<p> Périodiques, conférences et études</p>												
	</body>
</html>