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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert_rep_q1, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_01";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
				$axes_reflexions_2 = $row["axes_reflex_rep_q2"] ;
			}
		?>

		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr />

		<h2> 1 - Les sources du droit interne </h2>
		<p>loi, règlement, hiérarchie des normes, jurisprudence, coutume, droits subjectifs, droit objectif, droit positif</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie01.php">Les sources formelles du droit</a></h3>
		<h4><u> A - Présentation des différents textes</u></h4>
		<h4> 1 - Champs d'application</h4>
		<h4> 2 - Procédures d'élaboration</h4>
		<h4> 3 - Conditions d'application</h4>
		<h4><u> B - Hiérarchie des textes</u></h4>
		<h4> 1 - Le contrôle de constitutionnalité de la loi</h4>
		<h4> 2 - Le contrôle de la légalité du règlement</h4>
		<h5><u> Le recours par excès de pouvoir</u></h5>
		<h5><u> L'exception d'illégalité</u></h5><br>
		<h3> II - <a href ="../parties/partie02.php">Les autres sources du droit</a></h3>
		<h4><u> A - La source judiciaire</u></h4>
		<h4> 1 - Un pouvoir normatif particulier</h4>
		<h4> 2 - Une source indirecte du droit</h4>
		<h4><u> B - Les sources extrajudiciaires</u></h4>
		<h4> 1 - La coutume</h4>
		<h4> 2 - La doctrine</h4>
		<h4><u>Conclusion</u></h4>
		<br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quels sont les domaines respectifs de la loi et du règlement ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources </h4><h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p><br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4>
		<p> <b>1.	Un recours introduit par votre association contre l’arrêté municipal peut-il être intenté ?</b><br>
		a)	aucun recours n’est possible<br>
		b)	un recours en contrôle de constitutionnalité<br>
		c)	un recours pour excès de pouvoir<br>
		d)	un recours en exception d’illégalité<br>
		<br><br>
		<b>2.	Le recours pour excès de pouvoir est possible</b><br>
		a)	uniquement devant un tribunal administratif<br>
		b)	devant une juridiction civile ou administrative, au choix<br>
		c)	lorsque l’action concerne un arrêté<br>
		d)	lorsque l’action concerne une loi<br>
		<br><br>
		<b>3.	Si le recours est admis, le recours pour excès de pouvoir produit ses effets</b><br>
		a)	à l’égard de tous<br>
		b)	uniquement à l’égard de celui qui en fait la demande, en l’occurrence l’association<br>
		c)	ne produit aucun effet
		</p>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Qu'appelles-t-on les principes généraux du droit ?</b></p>
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Les principes généraux du droit sont-ils supérieurs à la loi ?</b></p>
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement01.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>						
		<p> Lexiques</p>
		<p> Périodiques</p>
		<br><br>	
	</body>
</html>