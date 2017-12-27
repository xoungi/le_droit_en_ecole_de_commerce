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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1 FROM chapitre_12";
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
			}
		?>

		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h2> 12 - Responsabilité civile et responsabilité pénale </h2>
		<p>distinctions, rapprochements, fonction normative, responsabilité pénale des personnes morales, faute civile et faute pénale</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement12.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie24.php">Des rapprochements au-delà des distinctions
		</a></h3><h4><u> A - Une vocation commune au-delà d'objectifs différents : la régulation des comportements ou l'incitation à éviter les comportements dommageables (la fonction normative)</u></h4>
		<h4><u> B - Une reconnaissance liée : la responsabilité pénale des personnes morales</u></h4><br>
		<h3> II - <a href ="../parties/partie25.php">Des contrastes au sein des distinctions</a></h3>
		<h4><u> A - Des distinctions irréductibles</u></h4>
		<h4> 1 - ...quant à la formulation des règles de responsabilité </h4><h4> 2 - ...quant à l'existence d'un préjudice personnel </h4>
		<h4><u> B - L'émergence d'une distinction fragile ou la fin d'une unité : la rupture entre la faute civile et la faute pénale</u></h4>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement12.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quel est l'intérêt d'une délégation de pouvoirs ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement12.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Que signifie le principe de l'autorité de la chose jugée au pénal sur le civil ?</b></p>	
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement12.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<h4> Site Internet</h4>
		<br><br>
		
		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement12.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Iris FOGERER sait que la responsabilité pénale du chef d’entreprise a connu une extension considérable. Elle s’interroge… le droit pénal impose le respect de règles, sous peine de sanctions. A propos de quel type de relations ?</b><br>
		<mark>a)</mark>	les relations du chef d’entreprise avec les fournisseurs<br>
		<mark>b)</mark>	les relations du chef d’entreprise avec les salariés<br>
		<mark>c)</mark>	les relations du chef d’entreprise avec les clients<br><br>
		<b>
		2.	Iris FOGERER pense que la délégation de pouvoirs offre au dirigeant la possibilité de désigner un tiers pour engager valablement la société, notamment pendant l’absence du représentant légal. Est-elle suffisamment informée ?</b><br>
		a)	oui<br>
		<mark>b)</mark>	non<br><br>
		<b>
		3.	Sachant qu’un salarié peut, dans le cadre de son activité professionnelle, engager sa responsabilité pénale, celle-ci peut-elle avoir une influence sur la responsabilité civile de son employeur ?</b><br>
		<mark>a)</mark>	oui<br>
		b)	non<br><br>
		<b>
		4.	Plus généralement, Iris FOGERER s’interroge sur l’influence de la responsabilité pénale d’un dirigeant à l’égard des tiers. Si un dirigeant est l’auteur d’une faute constituant une infraction pénale et entraînant des conséquences dommageables à l’égard de tiers, doit-il nécessairement répondre de sa responsabilité civile à l’égard des tiers ?</b><br>
		a)	oui, car s’il y a faute pénale, il y a faute civile<br>
		<mark>b)</mark>	pas nécessairement, car un dirigeant n’engage sa responsabilité à l’égard des tiers que si il a commis une faute séparable ou détachable de ses fonctions
		</p>
		<br>
		<h4> Réponse au cas pratique :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement12.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Peut-on parler d'une inflation de la responsabilité pénale ?</b></p>
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement12.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>
		
		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>					
		<p> Ouvrages</p>
		<p> Thèses</p>	
		<p> Périodiques</p>	
	</body>
</html>