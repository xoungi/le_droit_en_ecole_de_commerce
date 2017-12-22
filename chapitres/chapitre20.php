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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2, axes_reflex_rep_q3 FROM chapitre_20";
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
		<hr /><h2> 20 - La rédaction des clauses du contrat </h2>
		<p>contrat, clauses, analyse des risques, clause pénale, clause résolutoire, clauses relatives à la rupture du contrat, clause d'exclusivité, clause compromissoire</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement20.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie40.php">La création du lien contractuel</a></h3>
		<h4><u> A - Les clauses relatives à la naissance du lien contractuel</u></h4>
		<h4><u> B - Les clauses relatives aux obligations contractuelles</u></h4>
		<h4> 1 - Les obligations essentielles du contrat</h4>
		<h4> 2 - Les obligations complémentaires du contrat</h4>
		<h5><u> La sanction peut être prévue par la contrat</u></h5>
		<h5><u> Dans le cas d'une transaction en droit du travail</u></h5><br>
		<h3> II - <a href ="../parties/partie41.php">L'exécution du lien contractuel et les clauses relatives à la gestion des risques</a></h3>
		<h4><u> A - La clause pénale</u></h4>
		<h4><u> B - La clause résolutoire</u></h4>
		<h4> 0 - La clause résolutoire simple</h4>
		<h4> 0 - La clause résolutoire de plein droit</h4>
		<h4> 0 - La clause résolutoire de plein droit sans sommation</h4>
		<h4><u> C - Les clauses relatives à la responsabilité contractuelle</u></h4>
		<h4> 1 - Les clauses de règlement amiable préalable au contentieux</h4>
		<h4> 2 - Les procédés de règlement du litige préalable au contentieux</h4><br>
		<h3> III - <a href ="../parties/partie42.php">Les clauses relatives à la fin du contrat</a></h3>
		<h4><u> A - Les clauses permettant la résolution amiable des conflits</u></h4>
		<h4><u> B - Les clauses permettant le règlement aménagé des conflits</u></h4>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>		
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement20.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quelle est la valeur juridique d'une clause d'exclusivité dans un contrat de travail ?</b></p>	
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement20.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Une clause d'objectif dans un contrat de travail peut-elle prévoir la sanction (le licenciement) ?</b></p>						
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement20.php">
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
		<p> - Jurisprudence internationale</p>
		<p> - Textes internationaux</p>
		<h4> Sites internet</h4>

		<br><br><h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement20.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Comment répondre à l’objectif décliné par les étudiants qui ne veulent pas être responsables en cas d’absence de neige ?</b><br>
		a)	Rédiger une clause résolutoire<br>
		b)	Rédiger une clause relative aux obligations (moyen ou résultat)<br>
		c)	Rédiger une clause de limitation de responsabilité en cas de force majeure<br><br>
		<b>
		2.	Quelle clause rédiger pour s’assurer de la remise des fonds à l’œuvre caritative ?</b><br>
		a)	une clause pénale<br>
		b)	une clause particulière sur mesure<br>
		c)	une clause résolutoire<br><br>
		<b>
		3.	Les deux parties ne souhaitent pas régler leur éventuel différent en justice, elles peuvent rédiger</b><br>
		a)	Une clause de règlement amiable de leur différend<br>
		b)	Une clause compromissoire<br>
		c)	Une clause d’attribution de compétence territoriale<br><br>
		<b>
		4.	Comment fixer la contrepartie donnée par l’entreprise dans une clause précise ?</b><br>
		a)	Il suffit de mentionner le prix en espèce de la prestation<br>
		b)	Il convient de rédiger une clause relative au prix tout en intégrant les prestations en nature<br>
		c)	Le contrat n’a pas à mentionner le prix qui relève de la seule négociation des parties
		</p><br>
		<h4> Réponse au cas pratique :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement20.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Doit on rappeler les dispositions de la loi dans le contrat ?</b></p>	
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement20.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Quelles sont les précautions à prendre avant d'entamer la rédaction du contrat ?</b></p>
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>								
		<form method="post" action="traitement20.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>A quoi sert le contrat écrit dans les relations commerciales ?</b></p>	
		<?php
			if ($axes_reflexions_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_3, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement20.php">
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