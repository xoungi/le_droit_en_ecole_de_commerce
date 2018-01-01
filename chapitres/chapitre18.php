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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, avis_expert_rep_q3, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_18";
			/*echo "<br>";
			echo $requete;
			echo "<br>";*/
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
		<hr /><h2> 18 - Inexécution contractuelle </h2>
		<p>l'exécution forcée, la résolution pour inexécution, l'exception d'inexécution, la force majeure</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement18.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie36.php">Le choix du créancier face à l'inexécution contractuelle </a></h3>
		<h4><u> A - L'exécution forcée du contrat</u></h4>
		<h4><u> B - La résolution pour inexécution</u></h4><br>
		<h3> II - <a href ="../parties/partie37.php">D'autres options pour le créancier </a></h3>
		<h4><u> A - L'exception d'inexécution</u></h4>
		<h4><u> B - La force majeure (théorie des risques)</u></h4>
		<h4><u>  Conclusion </u></h4>
		<br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement18.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>	
		<p><b> La force majeure et l'inexécution contractuelle</b></p>	
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement18.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Qu'en est-il de la rupture unilatérale d'un contrat synallagmatique ?</b></p>
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement18.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> A quoi sert la mise en demeure ?</b></p>		
		<?php
			if ($avis_expert_q3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q3, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement18.php">
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
		<h4> Site internet</h4>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement18.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	De quels moyen M. MIRAIL dispose-t-il pour renoncer au contrat qui l’oppose à l’entreprise d’entretien ?</b><br>
		<mark>a)</mark>	une résolution judiciaire<br>
		b)	application d’une clause résolutoire<br>
		<mark>c)</mark>	une rupture unilatérale du contrat<br><br>
		<b>
		2.	Si M. MIRAIL souhaite rompre unilatéralement ce contrat, quelles sont les conditions à réunir ?</b><br>
		a)	la rupture unilatérale est impossible sans décision de justice<br>
		<mark>b)</mark>	un manquement grave des obligations du débiteur<br>
		<mark>c)</mark>	l’urgence qui impose l’interruption du contrat<br><br>
		<b>
		3.	M. MIRAIL souhaite obtenir la restitution de toutes les sommes versées à l’entreprise d’entretien. Est-ce possible ?</b><br>
		a)	oui<br>
		b)	non<br><br>
		<b>
		4.	Quelles sont les conditions pour qu’un évènement soit reconnu de force majeure ?</b><br>
		<mark>a)</mark>	l’irrésistibilité<br>
		<mark>b)</mark>	l’imprévisibilité<br>
		<mark>c)</mark>	l’extériorité<br><br>
		<b>
		5.	Si la force majeure est reconnue, est-il possible pour M. MIRAIL d’obtenir le paiement de dommages intérêts par son débiteur ?</b><br>
		a)	oui<br>
		<mark>b)</mark>	non
		</p><br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement18.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Quelle est l'utilité de la clause de résolution de plein droit ?</b></p>	
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement18.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Quelle est la distinction à faire entre l'inexécution contractuelle et la responsabilité contractuelle ?</b></p>						
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement18.php">
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