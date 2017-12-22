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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_16";
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
		<hr /><h2> 16 - Les obligations nées du contrat </h2>
		<p>contrat, obligation de donner, obligation de faire, obligation de faire et de ne pas faire, obligation d'information</p><br>

		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement16.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie32.php">Les obligations nées de la définition du Code civil</a></h3>
		<h4><u> A - L'obligation de donner, faire ou ne pas faire</u></h4>
		<h4> 1 - Obligation de donner</h4>
		<h4> 2 - Obligation de faire</h4>
		<h4> 3 - Obligation de ne pas faire</h4>
		<h4><u> B - Les obligations de moyens et de résultat</u></h4>
		<h4> 1 - L'obligation de moyens</h4>
		<h4> 2 - L'obligation de résultat</h4><br>
		<h3> II - <a href ="../parties/partie33.php">Les obligations nées de la pratique du droit des contrats</a></h3>
		<h4><u> A - Les obligations nouvelles nées de la volonté des parties</u></h4>
		<h4> 1 - La création de contrat sui generis</h4>
		<h4> 2 - Les parties vont parfois dans l'exécution du contrat créer de nouvelles obligations que le juge ne pourra que reconnaître</h4>
		<h4><u> B - Les obligations nées de l'interprétation du juge</u></h4>
		<h4> 1 - Le rôle du juge dans l'interprétation des contrats</h4>
		<h4> 2 - La définition d'obligation essentielles dans les contrats</h4>
		<h4> 3 - Les obligations nouvelles</h4>
		<h5><u> L'obligation de sécurité</u></h5>
		<h5><u> Le développement jurisprudentiel des obligations d'information et de conseil démontre le souci de cette quête de justice contractuelle</u></h5>
		<h5><u> L'obligation de renseignement</u></h5>
		<h5><u> Le devoir de conseil</u></h5>
		<h5><u> L'obligation de mise en garde</u></h5>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement16.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quelle est l'obligation du médecin en matière d'information de son patient ?</b></p>	
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement16.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><p><b> La notion d'obligation essentielle ou comment la cause peut servir à la redéfinition des obligations</b></p>						
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement16.php">
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
		<h4> Sites Internet</h4>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement16.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Monsieur JYNOV cherche à contraindre Monsieur JEFORM à exécuter le contrat.</b><br>
		a)	il peut le contraindre à s’exécuter car le contrat a été conclu<br>
		b)	il peut seulement obtenir des dommages et intérêts car il s’agit d’une obligation de faire<br>
		c)	il peut obtenir à la fois des dommages et intérêts et une exécution forcée<br><br>
		<b>
		2.	Monsieur JYNOV a un certain nombre d’obligations par rapport à la clientèle, il a :</b><br>
		a)	certainement une obligation de livrer un matériel conforme<br>
		b)	une obligation de formation du client utilisateur<br>
		c)	une obligation de sécurité de résultat avec en particulier l’obligation de répondre de tous les dommages pouvant survenir au client<br>
		d)	seulement l’obligation d’avertir des risques liés à la mer<br><br>
		<b>
		3.	Les clients ont l’obligation…</b><br>
		a)	de rendre le matériel à l’heure et en bon état<br>
		b)	de respecter les consignes de sécurité<br>
		c)	uniquement de produire une attestation d’assurance responsabilité civile<br><br>
		<b>
		4.	Monsieur JYNOV le droit de limiter ses obligations et sa responsabilité</b><br>
		a)	en cas de surréservation<br>
		b)	seulement en cas de dommages corporel<br>
		c)	s’il a averti les clients au moment de la remise du ticket qui vaut contrat<br>
		d)	en cas de dommage matériel si le client à pris des risques inconsidérés<br><br>
		<b>
		5.	La société RAPID POST peut limiter sa responsabilité</b><br>
		a)	seulement en présence d’une clause particulière signée des deux parties<br>
		b)	si le client n’ a pas précisé la valeur du colis et de son acheminement dans les délais<br>
		c)	mais manque à son obligation essentielle ce qui rend le contrat sans cause et permet l’annulation de la clause</p><h4>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement16.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>La clause de non-concurrence en droit du travail ou l'exemple d'une obligation de ne pas faire strictement encadrée ?</b></p>						
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>De l'obligation de renseignement au devoir de conseil du banquier</b></p>
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement16.php">
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