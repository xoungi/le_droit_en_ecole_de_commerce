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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_09";
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
		<hr /><h2> 9 - Les droits de la personnalité </h2>
		<p>personnes, libertés, droit fondamentaux, nom, image, contrat, fiction, patrimoine, information</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement09.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie18.php">L'exploitation du nom</a></h3>
		<h4><u> A - On ne peut en principe disposer de son nom</u></h4>
		<h4><u> B - Certains contrats portant sur le nom sont possibles</u></h4><br>
		<h3> II - <a href ="../parties/partie19.php">L'exploitation de l'image</a></h3>
		<h4><u> A - On ne peut en principe disposer de son image</u></h4>
		<h4><u> B - Certains contrats portant sur l'image sont possibles</u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement09.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>		
		<p><b> Quel sort juridique est réservé aux droits sur l'image, frappés par des techniques sophistiquées ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement09.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement09.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Sont considérés comme des droit de la personnalité :</b><br>
		a)	les prérogatives qui permettent à chacun de s’enrichir<br>
		b)	les droit qui assurent le respect de l’individu et son essence<br><br>
		<b>
		2.	Peut-on passer un contrat portant sur un ou plusieurs droits de la personnalité ?</b><br>
		a)	oui, toujours et sans limite<br>
		b)	non, jamais<br>
		c)	seulement de manière exceptionnelle et limitée<br><br>
		<b>
		3.	La clause par laquelle une personne accepte d’être filmée sans discontinuer pendant plus de deux mois :</b><br>
		a)	est parfaitement valable, dès lors que le participant a bel et bien signé le contrat<br>
		b)	doit obligatoirement être précisée dans le contrat pour être valable<br>
		c)	n’est pas valable même si précisée dans le contrat<br><br>
		<b>
		4.	La clause par laquelle un participant doit se conformer aux règles et instructions de l’organisateur sans les discuter :</b><br>
		a)	est légale, le participant ayant signé une convention en connaissance de cause<br>
		b)	n’est valable que si les règles et instructions ont été entièrement portées à la connaissance du participant avant la signature du contrat<br>
		c)	n’est jamais valable
		</p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement09.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>La notion de personne doit-elle se limiter à... la personne ?</b></p>		
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement09.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
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