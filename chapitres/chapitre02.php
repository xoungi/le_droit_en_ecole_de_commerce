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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert_rep_q1, axes_reflex_rep_q1 FROM chapitre_02";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
			}
		?>
		
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h2> 2 - L'articulation des normes juridiques internes et des normes juridiques internationales </h2>
		<p>sources, ordre juridique interne, ordre juridique international, convention internationale, traité, coutume, principes généraux du droit, jurisprudence, doctrine, tribunaux internationaux, tribunaux étatiques, Cour internationale de justice, hiérarchie des normes, primauté, constitution, loi, règlement</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement02.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie03.php">Les sources du droit interne et les sources du droit international</a></h3>
		<h4><u> A - Les sources de l'ordre juridique interne</u></h4>
		<h4> 1 - La constitution</h4>
		<h4> 2 - Les traités</h4>
		<h4> 3 - Les lois organiques</h4>
		<h4> 4 - Les lois ordinaires</h4>
		<h4> 5 - Les ordonnances</h4>
		<h4> 6 - Les règlements</h4>
		<h4> 7 - Les sources secondaires et informelles</h4>
		<h5><u> La jurisprudence</u></h5>
		<h5><u> La coutume</u></h5>
		<h5><u> La doctrine</u></h5>
		<h4><u> B - Les sources de l'ordre juridique international</u></h4>
		<h4> 1 - La hiérarchie des normes</h4>
		<h4> 2 - Le contenu des sources du droit international</h4>
		<h5><u> Les conventions internationales</u></h5>
		<h5> <font color="red">Traités multilatéraux</font></h5>
		<h5> <font color="red">Traités bilatéraux</font></h5>
		<h5> <font color="red">La coutume internationale</font></h5>
		<h5> <font color="red">Les principes généraux du droit</font></h5>
		<h5> <font color="red">Les décisions de justice</font></h5>
		<h5> <font color="red">La doctrine</font></h5><br>
		<h3> II - <a href ="../parties/partie04.php">Articulation du droit international et du droit interne</a></h3>
		<h4><u> A - Théories définissant les relations entre le droit international et le droit interne </u></h4>
		<h4> 1 - Le monisme (ou l'incorporation)</h4>
		<h4> 2 - Le dualisme (ou la transformation)</h4>
		<h4> 3 - L'harmonisation (ou la coordination)</h4>
		<h4><u> B - Application du droit international par les juridictions étatiques ou nationales</u></h4>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement02.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quel est l'intérêt de la distinction entre une norme résultant d'un traité international et une norme coutumière internationale ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement02.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
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
		<form method="post" action="traitement02.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4>
			<p> <b>1.	Le décret d’application de la loi fiscale interne peut-il contredire les dispositions de la convention fiscale ?</b><br>
			a)	oui, car le décret est postérieur à la convention fiscale<br>
			b)	oui, car la convention fiscale est contraire aux principes du droit international<br>
			c)	oui, car l’Etat est souverain quant à sa politique fiscale<br>
			d)	non, car la convention fiscale est un traité, soit, en principe, une norme supérieure à un Décret<br><br>
			<b>2.	L’Etat LAVIN peut-il contester la compétence du tribunal de l’Etat LAVIN qui aurait été saisi par l’entreprise étrangère TONIC ?</b><br>
			a)	non, car l’entreprise demande l’application d’une norme juridique supérieure dans l’ordre juridique interne<br>
			b)	oui, car elle est contraire aux principes du droit international<br>
			c)	oui, car le décret est postérieur à la convention fiscale<br>
			d)	oui, car son immunité est imposée par le droit international<br><br>
			<b>3.	Le tribunal saisi peut-il condamner l’Etat LAVIN à rembourser l’excédent d’impôt retenu sur les redevances dues à l’entreprise étrangère, TONIC ?</b><br>
			a)	oui, en application d’une norme juridique supérieure, un traité<br>
			b)	non, car cela serait contraire aux principes du droit international<br>
			c)	non, car l’Etat est souverain quant à sa politique fiscale<br>
			d)	non, car l’immunité de l’Etat est imposée par le droit international<br><br>
			<b>4.	En cas de contradiction entre la convention fiscale et certaines dispositions de la constitution, l’entreprise TONIC pourrait-elle obtenir réparation en invoquant la seule convention fiscale ?</b><br>
			a)	oui, car cela résulte des principes généraux du droit international<br>
			b)	oui, car le droit international prime sur le droit interne<br>
			c)	non, car l’Etat bénéficie d’une immunité<br>
			d)	non, car la constitution est probablement la source du droit internet hiérarchiquement la plus importante<br> </p>
		<br><h4> Réponse au cas pratique / QCM :</h4>
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement02.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>
		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Une cour d'appel peut-elle s'autoriser à écarter l'application d'une loi interne inconstitutionnelle, favorisant ainsi l'application d'une disposition issue d'un traité ?</b></p>			
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement02.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		
		<!--<br><br>--><br>
		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>
		<p> Lexiques</p>
		<br><br>	
	</body>
</html>