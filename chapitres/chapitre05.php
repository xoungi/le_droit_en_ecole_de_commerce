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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_05";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert = $row["avis_expert"] ;
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$avis_expert_q2 = $row["avis_expert_rep_q2"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
				$axes_reflexions_2 = $row["axes_reflex_rep_q2"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr />
		<h2> 5 - Le système judiciaire français </h2>
		<p>arbitrage interne, arbitrage international, mode alternatif de règlement des litiges, médiation, droit applicable, exécution des sentences arbitrales</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement05.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie09.php">Les principes fondamentaux garantissant le fonctionnement du système judiciaire français</a></h3>
		<h4><u> A - Le monopole de la justice par l'Etat</u></h4>
		<h4><u> B - Les facilités d'accès à la justice</u></h4>
		<h4> 1 - L'égalité de tous devant une justice indépendante </h4>
		<h4> 2 - La gratuité de la justice</h4>
		<h4> 3 - La disponibilité d'une assistance juridique</h4>
		<h4> 4 - La permanence de la justice</h4><br>
		<h3> II - <a href ="../parties/partie10.php">L'organisation judiciaire française</a></h3>
		<h4><u> A - L'ordre administratif</u></h4>
		<h4> 1 - Les juridictions administratives de première instance</h4>
		<h4> 2 - La juridiction administrative d'appel</h4>
		<h4> 3 - Le conseil d'Etat</h4>
		<h4><u> B - L'ordre judiciaire</u></h4>
		<h4> 1 - Les juridictions de première instance</h4>
		<h5><u> Les juridictions civiles</u></h5>
		<h5> <font color="red">Le Tribunal d'instance - TI</font></h5>
		<h5> <font color="red">Le Tribunal de commerce - TC</font></h5>
		<h5> <font color="red">Le Conseil de prud'hommes</font></h5>
		<h5> <font color="red">Le Tribunal des affaires de Sécurité sociale</font></h5>
		<h5> <font color="red">Le Tribunal paritaire des baux ruraux</font></h5>
		<h5> <font color="red">Le juge de proximité</font></h5>
		<h5><u> Les juridictions pénales</u></h5>
		<h5> <font color="red">Trois types d'infraction pénales :</font></h5>
		<h5> <font color="red">Les contraventions</font></h5>
		<h5> <font color="red">Les délits</font></h5>
		<h5> <font color="red">Les crimes</font></h5>
		<h4> 2 - Les juridictions d'appel</h4>
		<h5><u> Au civil : la Cour d'appel</u></h5>
		<h5><u> Au pénal : la chambre des appels correctionnels</u></h5>
		<h4> 3 - La Cour de cassation</h4>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement05.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>		
		<p><b> Qu'appelle-t-on les juridictions de proximité ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement05.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br>
		<p><b> Quelles sont les juridictions civiles les plus importantes dans le cadre de l'activité et de la vie des entreprises ?</b></p>
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement05.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts, décisions</h4>
		<h4> Sites Internet</h4><br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4>
		<p> <b>
		1.	L’un des grands principes de la justice en France est la gratuité. Cela signifie-t-il qu’un procès ne coûtera rien en définitive au justiciable qui aura obtenu gain de cause ?</b><br>
		a)	non<br>
		b)	oui<br><br>
		<b>
		2.	Si l’accès à la justice est limité par le coût qu’engendre le procès comment permettre à tout citoyen de disposer d’un réel accès au-delà des contingences financières ?</b><br>
		a)	par l’aide juridictionnelle<br>
		b)	par l’assurance protection juridique<br><br>
		<b>
		3.	En raison de la durée des procédures, Yanis s’interroge sur la résolution des litiges civils présentant un caractère d’urgence. Existe-t-il une procédure exceptionnelle ?</b><br>
		a)	non, la justice a besoin de temps, elle ne peut être rendue dans l’urgence<br>
		b)	oui, avec des conditions restrictives<br><br>
		<b>
		4.	Malgré la judiciarisation de notre société, Yanis sait qu’il existe des solutions évitant d’aller systématiquement devant une juridiction pour obtenir une décision de justice. Quels sont ces principaux modes non juridictionnels des conflits ?</b><br>
		a)	l’arbitrage<br>
		b)	la conciliation<br>
		c)	la médiation<br>
		d)	la transaction
		</p><br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Comment peut-on expliquer les difficultés d'accès à la justice ?</b></p>	
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement05.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Comment illustrer la lenteur et l'aléa judiciaire ?</b></p>		
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement05.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3><p> Ouvrages</p>						
		<p> Lexique</p>
		<p> Publications</p>
	</body>
</html>