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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2, axes_reflex_rep_q3 FROM chapitre_14";
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
				$axes_reflexions_3 = $row["axes_reflex_rep_q3"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr />
		<h2> 14 - Les pourparlers </h2>
		<p>phase pré-contractuelle, offre de contracter, liberté contractuelle négociations parallèles, invalidité, responsabilité, rupture</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement14.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie28.php">Absence de réglementation légale sur les pourparler : application du principe de liberté contractuelle</a></h3>
		<h4><u> A - Valeur juridique de l'invitation à entrer en pourparlers</u></h4>
		<h4><u> B - Formes de pourparlers</u></h4>
		<br><h3> II - <a href ="../parties/partie29.php">Présence indélébiles laissées par les pourparlers : évaluation des conséquences</a></h3>
		<h4><u> A - Conséquences négatives des pourparlers</u></h4>
		<h4><u> B - Conséquences positives des pourparlers</u></h4><br><br>
		<h4><u> Conclusion</u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement14.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quelle est la valeur juridique d'un document intitulé protocole ou projet ? Vaut-il contrat ou du moins promesse de contrat ? Et, à défaut, engage t-il les parties à poursuivre les négociations ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement14.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Le principe de libre rupture des négociations existe t-il toujours ?</b></p>		
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement14.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources </h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<p> - Jurisprudence internationale</p>
		<h4> Site Internet</h4>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement14.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4>
		<p> <b>
		1.	Selon vous, le contrat entre Monsieur MIRAIL et Monsieur TEUDEMOISELLE est-il formé ?</b><br>
		a)	oui, le contrat est formé<br>
		<mark>b)</mark>	non, le contrat n’est pas formé<br><br>
		<b>
		2.	Si l’on part du constat selon lequel les parties sont en période précontractuelle, comment ont-elles formalisé leurs rapports ? Il s’agit :</b><br>
		<mark>a)</mark>	de simples pourparlers<br>
		b)	d’une promesse de contrat<br>
		c)	d’un avant-contrat<br><br>
		<b>
		3.	Quelle est la valeur juridique de la lettre envoyée par Monsieur TEUDEMOISELLE à Monsieur MIRAIL ? Il s’agit :</b><br>
		a)	d’une lettre d’acceptation d’un contrat<br>
		<mark>b)</mark>	d’une simple lettre commerciale<br>
		c)	d’un devis, forme de proposition de contrat<br><br>
		<b>
		4.	Sur quel argument Monsieur MIRAL pourrait-il se fonder pour ne pas payer la facture établie par Monsieur TEUDEMOISELLE à son égard ?</b><br>
		a)	sur un vice du consentement<br>
		b)	sur l’annulation du contrat<br>
		<mark>c)</mark>	sur le terrain de la période pré-contractuelle
		</p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement14.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>La période pré-contractuelle peut-elle avoir une influence négative sur la clause d'un contrat ?</b></p>
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement14.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Les liens de pourparlers sont-ils nécessairement exclusifs ? Est-il interdit à la personne d'ores et déjà engagée dans une négociation de nouer des contacts parallèles ?</b></p>						
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement14.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Quelle est la place des pourparlers dans les contrats internationaux ?</b></p>						
		<?php
			if ($axes_reflexions_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_3, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement14.php">
			<textarea id="axes_reflexions_3" name="axes_reflexions_3" rows="5" cols="30"></textarea>
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