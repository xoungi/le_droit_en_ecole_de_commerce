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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, avis_expert_rep_q3, axes_reflex_rep_q1, axes_reflex_rep_q2, axes_reflex_rep_q3 FROM chapitre_07";
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
				$axes_reflexions_3 = $row["axes_reflex_rep_q3"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h2> 7 - Acteurs du droit : personnes physiques, personnes morales </h2>
		<p>personnalité juridique, patrimoine, droits de la personnalité, droit d'ester en justice, capacité, sujets de droits, personne humaine
		</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement07.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie13.php">La notion de personne</a></h3>
		<h4><u> A - Diversité des personnes morales face à l'unicité de la personne physique</u></h4>
		<h4><u> B - Nature juridique de la personne</u></h4><br>
		<h3> II - <a href ="../parties/partie14.php">L'individualisation des personnes</a></h3>
		<h4><u> A - L'attribution de la personnalité juridique</u></h4>
		<h4> 1 - L'acquisition de la personnalité juridique</h4>
		<h5><u> La naissance de la personne physique</u></h5>
		<h5><u> La constitution de la personne morale</u></h5>
		<h4> 2 - La perte de la personnalité juridique</h4>
		<h5><u> La mort</u></h5>
		<h5><u> La disparition de la personne morale</u></h5>
		<h4><u> B - L'identification de la personne</u></h4>
		<h4> 1 - Le nom de la personne</h4>
		<h5><u> Le nom de la personne physique</u></h5>
		<h5><u> La dénomination de la personne morale</u></h5>
		<h4> 2 - Le domicile de la personne</h4>
		<h5><u> Le domicile de la personne physique</u></h5>
		<h5><u> Le siège social de la personne morale</u></h5><br>
		<h3> III - <a href ="../parties/partie15.php">Les attributs de la personne</a></h3>
		<h4><u> A - La capacité</u></h4>
		<h4> 1 - La capacité des personnes physiques</h4>
		<h4> 2 - La capacité des personnes morales</h4>
		<h4><u> B - Les droits de la personne</u></h4>
		<h4> 1 - Les droits patrimoniaux</h4>
		<h4> 2 - Les droits extra-patrimoniaux</h4>
		<h5><u> Les droits extra-patrimoniaux des personnes physiques</u></h5>
		<h5><u> Les droits extra-patrimoniaux des personnes morales</u></h5>
		<h5><u> Le droit d'ester en justice</u></h5>
		<h4><u> Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>		
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement07.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>		
		<p><b> Autoriser une personne morale à utiliser son nom patronymique, notoirement connu, implique-t-il qu'elle puisse l'exploiter au titre d'une marque ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement07.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Quel est le sort des actes accomplis, au nom d'un groupement entre sa constitution et l'attribution de la personnalité morale ?</b></p>						
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement07.php">
			<textarea id="question_expert_2" name="question_expert_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> Quelle est la portée de la théorie de la réalité des personnes morales ?</b></p>						
		<?php
			if ($avis_expert_q3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q3, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement07.php">
			<textarea id="question_expert_3" name="question_expert_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p><br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement07.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Quelles sont les structures juridiques qui permettent la distribution de bénéfices ?</b><br>
		a)	la société à responsabilité limitée<br>
		b)	la société par actions simplifiée<br>
		c)	l’association<br>
		d)	la société civile<br><br>
		<b>
		2.	Comment être certain qu’un acte accompli au nom d’une société avant son immatriculation est repris par elle ?</b><br>
		a)	en donnant mandat à un membre d’accomplir cet acte en prévoyant la reprise par la société<br>
		b)	en décidant de la reprise de cet acte dans une assemblée générale des associés postérieure à l’acquisition de la personnalité morale<br>
		c)	en déposant cet acte au greffe du tribunal de commerce<br>
		d)	en faisant signer l’acte par tous les associés, membres de la société<br><br>
		<b>
		3.	Une personne morale peut-elle utiliser le nom patronymique d’une personne physique dans sa dénomination sociale ?</b><br>
		a)	oui, si la personne physique l’autorise<br>
		b)	non, jamais<br>
		c)	oui, dans tous les cas<br><br>
		<b>
		4.	Autoriser une personne morale à insérer son nom patronymique dans sa dénomination sociale lui permet-il d’exploiter ce nom commercialement en en déposant la marque ?</b><br>
		a)	oui<br>
		b)	non
		</p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement07.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Comment le droit protège-t-il le corps humain ?</b></p>	
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>La théorie du patrimoine est-elle toujours d'actualité ?</b></p>
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Qu'est-ce qui distingue l'association de la société ?</b></p>	
		<?php
			if ($axes_reflexions_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_3, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement07.php">
			<textarea id="axes_reflexions_3" name="axes_reflexions_3" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels, mémentos</p>
		<p> Répertoires</p>
		<p> Lexiques</p>
		<p> Périodiques</p>
	</body>
</html>