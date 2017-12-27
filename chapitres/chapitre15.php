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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, avis_expert_rep_q3, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_15";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert = $row["avis_expert"] ;
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$avis_expert_q2 = $row["avis_expert_rep_q2"] ;
				$avis_expert_q3 = $row["avis_expert_rep_q3"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
				$axes_reflexions_2 = $row["axes_reflex_rep_q2"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h2> 15 - Les éléments essentiels du contrat </h2>
		<p>aptitude à contracter, consentement libre et éclairé, objet possible et déterminé, cause existante</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement15.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie30.php">Conditions relatives à la personne du contractant</a></h3>
		<h4><u> A - La capacité à contracter</u></h4>
		<h4><u> B - L'intégrité du consentement</u></h4><br>
		<h3> II - <a href ="../parties/partie31.php">Conditions relatives aux obligations du contractant</a></h3>
		<h4><u> A - L'objet du contrat</u></h4>
		<h4><u> B - La cause du contrat</u></h4>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement15.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Dans quelles circonstances le prix est-il considéré comme déterminé ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement15.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Quels sont les différents visages des vices du consentement ?</b></p>
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement15.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Quelle est l'étendue de l'incapacité à contracter ?</b></p>	
		<?php
			if ($avis_expert_q3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q3, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement15.php">
			<textarea id="question_expert_3" name="question_expert_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<p> - Jurisprudence internationale</p>
		<h4> Site Internet</h4><br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement15.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Si M. MIRAIL souhaite exercer une action en nullité pour vice du consentement : laquelle serait la plus appropriée d’après les faits ?</b><br>
		a)	le dol par manœuvre frauduleuses<br>
		b)	l’erreur sur les qualités substantielles de la chose<br>
		<mark>c)</mark>	la violence sous forme de contraintes morales suite à des pressions d’ordre économique<br><br>
		<b>
		2.	Si M. MIRAIL choisit de se fonder sur le vice de la violence, quels sont les éléments constitutifs du vice qui feront défaut et empêcheront la demande d’aboutir ?</b><br>
		<mark>a)</mark>	existence d’une contrainte morale<br>
		<mark>b)</mark>	gravité de la violence<br>
		<mark>c)</mark>	violence illégitime<br><br>
		<b>
		3.	La clause reproduite concerne t-elle ?</b><br>
		a)	la capacité à contracter des parties<br>
		<mark>b)</mark>	l’objet du contrat<br>
		c)	la cause du contrat<br><br>
		<b>
		4.	Doit-on considérer la clause de prix indéterminé ou indéterminable du fait de l’absence de référence à un prix précis ?</b><br>
		a)	oui, la clause de prix est indéterminable<br>
		<mark>b)</mark>	non, la clause de prix est déterminable
		</p><br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement15.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>La protection du consentement comprend-t-elle la protection du contractant le plus faible ?</b></p>	
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement15.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Qu'en est-il du contrat électronique ?</b></p>		
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement15.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>
		<p> Périodiques</p>
	</body>
</html>