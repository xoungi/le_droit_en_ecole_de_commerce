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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, axes_reflex_rep_q1 FROM chapitre_04";
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
		<hr /><h2> 4 - Le processus de décision dans l'Union européenne </h2>
		<p>institution européenne, processus de décision législative, processus de décision judiciaire, acquis communautaire, coopération, codécision, consultation, avis conforme, recours en annulation, renvoi préjudiciel, procédure d'infraction</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement04.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie07.php">Le processus de décision législatif</a></h3>
		<h4><u> A - L'origine d'un texte législatif ou la formulation politique</u></h4>
		<h4><u> B - Le projet de texte ou la rédaction d'un premier projet</u></h4>
		<h4><u> C - Les procédures d'adoption</u></h4>
		<h4> 1 - La procédure de consultation </h4>
		<h4> 2 - La procédure de coopération</h4>
		<h4> 3 - La procédure de codécision</h4>
		<h4> 4 - La vie conforme</h4><br>
		<h3> II - <a href ="../parties/partie08.php">Les processus de décision judiciaire</a></h3>
		<h4><u> A - L'accès aux juridictions européennes</u></h4>
		<h4><u> B - Les procédures judiciaires</u></h4>
		<h4> 1 - La procédure d'infraction</h4>
		<h4> 2 - Le recours en annulation</h4>
		<h4> 3 - Le renvoi préjudiciel </h4>
		<h4><u>  Conclusion </u></h4>
		<br><br><h3>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement04.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>	
		<p><b> Comment sont intégrés les textes législatifs en droit français ?</b></p>	
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement04.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Sites Internet</h4>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement04.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> 
		<b>
		1.	En droit interne, qu’est-ce que le défaut de conformité ?</b><br>
		a)	le défaut de conformité du bien acheté à ce qui avait été prévu dans le contrat entre le vendeur et l’acheteur<br>
		b)	le défaut de conformité du bien acheté à l’usage normal que l’on peut faire du bien<br>
		c)	le défaut de conformité du bien acheté au contrat et à l’usage normal que l’on peut faire du bien<br><br>
		<b>
		2.	En droit interne, qu’est-ce que la garantie des vices cachés ?</b><br>
		a)	le défaut de conformité du bien acheté à ce qui avait été prévu dans le contrat entre le vendeur et l’acheteur<br>
		b)	le défaut de conformité du bien acheté à l’usage normal que l’on peut faire du bien<br>
		c)	le défaut de conformité du bien acheté au contrat et à l’usage normal que l’on peut faire du bien<br><br>
		<b>
		3.	Qu’est-ce que le défaut de conformité pour la Directive européenne du 25 mai 1999 ?</b><br>
		a)	le défaut de conformité du bien acheté à ce qui avait été prévu dans le contrat entre le vendeur et l’acheteur<br>
		b)	le défaut de conformité du bien acheté à l’usage normal que l’on peut faire du bien<br>
		c)	le défaut de conformité du bien acheté au contrat et à l’usage normal que l’on peut faire du bien<br><br>
		<b>
		4.	Le délai pour agir contre le vendeur pour la garantie des vices cachés du droit français et pour le défaut de conformité de la directive européenne est-il le même ?</b><br>
		a)	oui, c’est deux ans pour les deux actions à compter de la délivrance du bien<br>
		b)	non, c’est un bref délai à compter de la découverte du vice, pour la garantie des vices cachés et deux ans à compter de la délivrance pour le défaut de conformité de la directive européenne<br>
		c)	oui, c’est un délai raisonnable à compter de la délivrance pour les deux actions
		</p><br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement04.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Les processus de décision dans la Communauté européenne sont-ils démocratiques ?</b></p>	
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement04.php">
			<textarea id="axes_reflexions" name="axes_reflexions" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		
		<!--<br><br>--><br>
		<h3><font color="blue">Bibliographie</font></h3>
		<p> Ouvrages</p>
		<p> Périodiques</p>
	</body>
</html>