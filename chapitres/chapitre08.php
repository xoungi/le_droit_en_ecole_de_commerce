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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, axes_reflex_rep_q1 FROM chapitre_08";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert = $row["avis_expert"] ;
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h2> 8 - Droit comparé et systèmes juridiques </h2>
		<p>perspective comparative, systèmes juridiques, unification des lois, communication internationale</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement08.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie16.php">Fonctions importantes du droit comparé</a></h3>
		<h4><u> A - Apports aux systèmes juridiques : entre unification du droit et reconstruction des systèmes en période de transition</u></h4>
		<h4><u> B - Apports aux juges : interprétation des lois nationales</u></h4>
		<h4><u> C - Apports aux sujets de droit : communication sur des questions juridiques internationales</u></h4>
		<br><h3> II - <a href ="../parties/partie17.php">Comparaison de grands systèmes juridiques</a></h3>
		<h4><u> A - Facteurs cruciaux pour la définition d'un système juridique</u></h4>
		<h4><u> B - Syllogisme juridique en droit de Common law et droit civil</u></h4>
		<h4><u> Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>									
		<form method="post" action="traitement08.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>		
		<p><b> Qu'est-ce qu'un trust ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement08.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br><h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<h4> Sites Internet</h4><br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement08.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	En application des dispositions de la loi française, la demande d’indemnisation du préjudice par la société « FERUDUNORD » serait-elle acceptable ?</b><br>
		<mark>a)</mark>	oui<br>
		b)	non<br><br>
		<b>
		2.	En application des dispositions de la loi anglaise, la demande d’indemnisation du préjudice par la société « FERUDUNORD » serait-elle acceptable ?</b><br>
		a)	oui<br>
		<mark>b)</mark>	non<br><br>
		<b>
		3.	En application des dispositions du Code civil allemand, la demande d’indemnisation du préjudice par la société « FERUDUNORD » serait-elle acceptable ?</b><br>
		a)	oui<br>
		<mark>b)</mark>	non<br><br>
		<b>
		4.	A l’issue d’une analyse de droit comparé, peut-on déduire que dans tous les systèmes juridiques exposés, il existe un volonté de limiter la responsabilité des personnes dont la négligence est à l’origine d’une préjudice économique pour un tiers ?</b><br>
		a)	non, jamais<br>
		b)	oui, la volonté est identique dans tous les systèmes<br>
		<mark>c)</mark>	oui, mais la volonté n’est pas exactement identique dans tous les systèmes </p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement08.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Nous orientons-nous vers une unification du droit privé de l'Union européenne ?</b></p>
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement08.php">
			<textarea id="axes_reflexions" name="axes_reflexions" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3>
		<p> Ouvrages</p>
		<p> Périodiques</p>						
		<p> Correction du mini-QCM chapitre 8</p>
		<br><br>
	</body>
</html>