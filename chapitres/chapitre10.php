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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, avis_expert_rep_q2, axes_reflex_rep_q1, axes_reflex_rep_q2 FROM chapitre_10";
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
		<hr /><h2> 10 - La responsabilité civile délictuelle pour faute et sans faute </h2>
		<p>faute subjective, faut objective, risque, garantie, assurance, fondement, fait générateur, fait personnel, fait des choses, fait d'autrui, commettant, préposé, abus de fonctions</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement10.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie20.php">La détermination de la faute dans la responsabilité pour faute (responsabilité subjective)</a></h3>
		<h4><u> A - L'évolution du concept de faute (de la faute subjective à la faute objective)</u></h4>
		<h4><u> B - Les diverses manifestations de la faute</u></h4><br>
		<h3> II - <a href ="../parties/partie21.php">Illustration d'un régime de responsabilité sans faute (responsabilité objective) : la responsabilité des commettants du fait de leurs préposés</a></h3>
		<h4><u> A - La responsabilité du préposé : d'une responsabilité principale pour faute à une responsabilité résiduelle pour abus de fonctions...</u></h4>
		<h4><u> B - L'exonération du commettant par le défaut de rattachement du fait dommageable aux fonctions du préposé : la délicate question de l'abus de fonctions</u></h4>
		<h4><u> Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement10.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Un fabricant de produits est-il responsable des dommages causés du fait de ses produits (non défectueux) utilisés par l'un de ses salariés ?</b></p>						
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement10.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p><b> La faute étant conçue comme l'unique fondement de la responsabilité pour les rédacteurs du Code civil, quelle évolution a mené à l’apparition des régimes de responsabilité sans faute ?</b></p>						
		<?php
			if ($avis_expert_q2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q2, ENT_NOQUOTES))."</p>";
			} else {
		?>			
		<form method="post" action="traitement10.php">
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
		<form method="post" action="traitement10.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Lorsqu’un salarié cause des dommages dans le cadre de sa fonction, sans commettre d’infraction pénale intentionnelle, la victime peut agir contre :</b><br>
		<mark>a)</mark>	l’employeur exclusivement, sans possibilité de recours pour l’employeur contre son salarié<br>
		b)	le salarié ou l’employeur, avec possibilité de recours pour l’employeur contre son salarié<br>
		c)	le salarié ou l’employeur, sans possibilité de recours pour l’employeur contre son salarié<br><br>
		<b>
		2.	L’abus de fonctions qui exonère le commettant du fait de son préposé est caractérisé lorsque le préposé agit :</b><br>
		a)	sans autorisation<br>
		b)	hors de ses fonctions<br>
		c)	à des fins étrangères à ses attributs<br>
		<mark>d)</mark>	à cette triple condition (a + b + c)<br><br>
		<b>
		3.	Pour avoir la qualité de gardien d’une chose, il faut :</b><br>
		a)	en être propriétaire<br>
		b)	en être le détenteur matériel au moment du dommage<br>
		<mark>c)</mark>	avoir un pouvoir d’usage, de contrôle et de direction<br><br>
		<b>
		4.	Un salarié peut-il être responsable des dommages imputables au fait d’une chose dont il avait la garde, dans l’exercice de sa fonction ?</b><br>
		a)	oui, dès lors que le salarié a la détention matérielle de la chose au moment du dommage<br>
		<mark>b)</mark>	non, parce que le lien de subordination du salarié à l’égard de son employeur lui retire la capacité d’être « gardien » d’une chose, au sens de l’article 1384 alinéa 1 du Code civil
		</p><h4>
		<br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement10.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Les risques liés à l'utilisation de l'Internet par un salarié sont-ils à la charge de l'employeur ?</b></p>						
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement10.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Pour éviter que la garantie d'assurance ne fasse défaut aux victimes, le juge civil retient une conception étroite de la faute intentionnelle (car elle échappe) à la prise en charge par l'assureur conformément à l'article L. 113-1 du Code des assurances). En pratique, comment les juges caractérisent-ils une telle faute ?</b></p>						
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>		
		<form method="post" action="traitement10.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3><font color="blue">Bibliographie</font></h3>
		<p> Manuels</p>
		<p> Thèse</p>
		<p> Périodiques</p>
		<p> Articles</p>
	</body>
</html>