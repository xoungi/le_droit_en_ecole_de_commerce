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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2, axes_reflex_rep_q3 FROM chapitre_11";
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
		<hr /><h2> 11 - Responsabilité et régimes spéciaux d'indemnisation </h2>
		<p>accidents du travail, accidents de la circulation, loi Badinter, implication, procédure d'indemnisation, offre d'indemnité, accidents médicaux, loi Kouchner, aléa thérapeutique, infections nosocomiales</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie22.php">La loi n°85-677 du 5 juillet 1985 tendant à l'amélioration de la situation des victimes d'accidents de la circulation et à l’accélération des procédures d'indemnisation, dite loi Badinter</a></h3>
		<h4><u> A - La situation des victimes</u></h4>
		<h4><u> B - La procédure d'indemnisation</u></h4>
		<br><h3> II - <a href ="../parties/partie23.php">La loi n°2002-303 du 4 mars 2002 relative aux droits des malades et à la qualité du système de santé, dite loi Kouchner et la loi n° 2002-1577 du 30 décembre 2002 relative à la responsabilité civile médicale </a></h3>
		<h4><u> A - Le rôle distributif des CICI</u></h4>
		<h4><u> B - Le rôle de garantie de l'ONIAM</u></h4>
		<h4><u> Conclusion </u></h4>
		<br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement11.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert : un régime spécial de responsabilité, la loi n° 98-389 du 19 mai 1998 relative à la responsabilité du fait des produits défectueux</a></h3>					
		<?php
			if ($avis_expert != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="avis_expert" name="avis_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Quelles particularités peut-on relever à l'égard de cette loi ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Quelles sont les conditions générales d'application de cette loi ?</b></p>						
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

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
		<form method="post" action="traitement11.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	La victime d’une infection nosocomiale peut obtenir une indemnisation :</b><br>
		a)	uniquement pour ses dommages les plus graves<br>
		b)	uniquement en cas de « manquement caractérisé aux obligations posées par la réglementation en matière de lutte contre les infections nosocomiales »<br>
		c)	sur le fondement de la responsabilité de plein droit de l’établissement de santé<br><br>
		<b>
		2.	La victime d’une infection nosocomiale doit s’adresser :</b><br>
		a)	à l’ONIAM (fonds de garantie)<br>
		b)	à la CICI (Commission interrégionale de conciliation et d’indemnisation)<br>
		c)	à l’établissement de santé responsable<br><br>
		<b>
		3.	La victime d’un produit présentant un défaut de sécurité peut invoquer :</b><br>
		a)	le régime de responsabilité de plein droit de la loi du 19 mai 1998 relative à la responsabilité du fait des produits défectueux<br>
		b)	la garantie des vices cachés<br>
		c)	le défaut de conformité du produit<br><br>
		<b>
		4.	Parmi les conditions d’application de la loi du 19 mai 1998 relative à la responsabilité du fait des produits défectueux, on trouve :</b><br>
		a)	la mise sur le marché du produit<br>
		b)	la mise en circulation du produit
		</p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement11.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Le risque de développement est à l'origine du retard en droit français de la transposition de la Directive européenne du 25 juillet 1985, relative à la responsabilité du fait des produits défectueux, A quoi correspond ce risque ?</b></p>						
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Quelle est la portée des arrêts amiantes du 28 février 2002 pour les victimes d'indemnisation d'accidents du travail ?</b></p>						
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="axes_reflections_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		<?php } ?>
		</form>
		<p> <b>Quels sont les rapports qu'entretiennent le droit de la responsabilité et les droits subjectifs ?</b></p>						
		<?php
			if ($axes_reflexions_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_3, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement11.php">
			<textarea id="axes_reflexions_3" name="axes_reflexions_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>
		<p> Périodiques</p>
		<p> Articles</p>
	</body>
</html>