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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_13";
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
		<hr /><h2> 13 - Responsabilité (internationale) des Etats et actions diplomatiques et consulaires </h2>
		<p>fondements, imputabilité, Etats, responsabilité civile, responsabilité pénale, réparation, droit international, droits de l'homme, immunité, diplomatique, consulaire, arbitrage, Cour internationale de justice, Cour pénale internationale, crimes contre l'humanité, génocide, imprescriptiblité</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement13.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie26.php">La responsabilité des Etats</a></h3>
		<h4><u> A - Les grands principes de la responsabilité des Etats</u></h4>
		<h4> 1 - Le fondement de la responsabilité des Etats</h4>
		<h5><u> La première se fonde sur une responsabilité objective</u></h5>
		<h5><u> La seconde, sur une responsabilité subjective</u></h5>
		<h4> 2 - La responsabilité civile et pénale des Etats, de leurs dirigeants, préposés ou agents</h4>
		<h4> 3 - L'imputabilité de la responsabilité des Etats</h4>
		<h4> 4 - Les causes de mise en jeu de la resonsabilité des Etats, du fait de préjudices causés aux ressortissants d'autres Etats</h4>
		<h4> 5 - La réparation par un Etat de la violation d'une obligation internationale</h4>
		<h4><u> B - La protection internationale des droits de l'homme et libertés fondamentales</u></h4>
		<h4> 1 - La Déclaration universelle des droits de l'homme</h4>
		<h4> 2 - La Conventions des Nations unies sur les droits de l'homme</h4>
		<h4> 3 - Autres instruments internationaux des Nations unies concernant les droits de l'homme</h4>
		<h4> 4 - La Convention européenne de sauvegarde des droits de l'homme et des libertés fondamentales</h4><br>
		<h3> II - <a href ="../parties/partie27.php">Le régime des immunités et le système des juridictions internationales compétentes</a></h3>
		<h4><u> A - Les immunités des Etats et de leurs agents</u></h4>
		<h4> 1 - L'immunité des agents diplomatiques et consulaires des Etats</h4>
		<h4> 2 - L'immunité des Etats</h4>
		<h4><u> B - Les juridictions internationales et nationales compétentes pour engager la responsabilité d'un Etat</u></h4>
		<h4> 1 - La Cour internationale de justice (CIJ)</h4>
		<h4> 2 - La Cour pénale internationale (CPI)</h4>
		<h4> 3 - Les juridictions étatiques françaises et la possible incrimination de crimes contre l'humanité commis par des personnes agissant pour le compte d'un gouvernement </h4>
		<h4><u> Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>			
		<form method="post" action="traitement13.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>	
		<p><b> Les crimes de génocide et autres crimes assimilés commis avant 1994 peuvent-ils être poursuivis devant les juridictions étatiques françaises ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement13.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<p> - Jurisprudence internationale</p>
		<h4> Sites Internet</h4>

		<br><br>
		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement13.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	La décision de nationalisation prise par l’Etat peut-elle être remise en cause ?</b><br>
		a)	oui, car elle est contraire au contrat de concession et aux engagements de l’Etat<br>
		b)	oui, car elle est contraire aux principes du droit international<br>
		<mark>c)</mark>	non, car l’Etat est souverain quant à ses richesses naturelles<br>
		d)	non, car cette décision est imposée par le droit international<br><br>
		<b>
		2.	L’Etat GAZOLAND peut-il contester la compétence du tribunal arbitral qui aurait été saisi par l’entreprise étrangère, HYDROP-OIL ?</b><br>
		<mark>a)</mark>	non, car elle est prévue par le contrat de concession<br>
		b)	oui, car elle est contraire aux principes du droit international<br>
		c)	oui, car l’Etat est souverain quant à ses richesses naturelles et cette décision échappe à la juridiction du tribunal arbitral<br>
		d)	oui, car son immunité est imposée par le droit international<br><br>
		<b>
		3.	Le tribunal arbitral saisi peut-il condamner GAZOLAND à verser des dommages-intérêts à l’entreprise HYDROP-OIL ?</b><br>
		<mark>a)</mark>	oui, car cela est prévu par le contrat de concession<br>
		b)	non, car cela serait contraire aux principes du droit international<br>
		c)	non, car l’Etat est souverain quant à ses richesses naturelles et cette décision échappe à la juridiction du tribunal arbitral<br>
		d)	non, car l’immunité de l’Etat est imposée par le droit international<br><br>
		<b>
		4.	Le dédommagement de l’entreprise HYDROP-OIL doit-il être proportionnel au préjudice réellement subi par cette dernière ?</b><br>
		<mark>a)</mark>	oui, car cela résulte des principes généraux du droit international et c’est conforme au contrat de concession<br>
		b)	non, car l’Etat est trop pauvre<br>
		c)	non, car le droit de l’Etat prévoit une indemnité limitée<br>
		d)	non, car le dédommagement n’a pas un caractère obligatoire
		</p>
		<h4> Réponse au cas pratique / QCM :</h4>
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>					
		<form method="post" action="traitement13.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>L'immunité de juridiction d'un Etat étranger a-t-elle un caractère absolu ?</b></p>		
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement13.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>L'inviolabilité des locaux des missions diplomatiques et consulaires peut-elle être remise en cause par des agents de l'Etat d'accueil ? Quelle est l'étendue de l'immunité de juridiction civile dont bénéficient les agents diplomatiques et consulaires ?</b></p>						
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement13.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>
	</body>
</html>