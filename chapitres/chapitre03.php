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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert_rep_q1, axes_reflex_rep_q1 FROM chapitre_03";
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
		<hr /><h2> 3 - Sources du droit communautaire et européen </h2>
		<p>sources du droit, droit communautaire, principe de proportionnalité, principe de subsidiarité, principe des pouvoirs limités, principe de primauté, principe d'autonomie, acquis communautaire</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement03.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie05.php">Les sources du droit communautaire</a></h3>
		<h4><u> A - Le droit primaire</u></h4>
		<h4> 1 - Le règlement</h4>
		<h4> 2 - Le directive</h4>
		<h4> 3 - La décision</h4>
		<h4> 4 - La recommandation et l'avis</h4>
		<h4> 5 - La jurisprudence de la Cour de justice des communautés européennes - CJCE - et du Tribunal de première instance des communautés européennes - TPICE</h4>
		<h4> 6 - Les principes généraux du droit et le droit international coutumier</h4>
		<h5><u> La garantie du respect des droit de l'homme et des libertés fondamentales</u></h5>
		<h5><u> Le principe d'autonomie du doit communautaire</u></h5>
		<h5><u> Le principe de primauté du droit communautaire</u></h5>
		<h5><u> Le principe de protection de la confiance légitime</u></h5>
		<h5><u> Le principe de responsabilité des Etats membres en cas de violation du droit communautaire</u></h5>
		<h4> 7 - Les traités internationaux signés par la Communauté européenne</h4>
		<h4> 8 - Les accords signés entre les Etats membres</h4>
		<h4><u> B - Le droit privé</u></h4>
		<h4> 1 - Les traités de Rome</h4>
		<h5><u> Le traité instituant la Communauté européenne du charbon et de l'acier - CECA</u></h5>
		<h5><u> Le traité instituant la Communauté économique européenne - CEE (Le traité de Rome)</u></h5>
		<h5><u> Le traité instituant la Communauté européenne de l'énergie atomique CEEA</u></h5>
		<h4> 2 - Le traité de Maastricht</h4>
		<h5><u> L'Union Européenne est divisée en trois Piliers</u></h5>
		<h5> <font color="red">Communautés européennes</font></h5>
		<h5> <font color="red">Politique étrangère et de sécurité commune (PESC)</font></h5>
		<h5> <font color="red">Justice et affaires intérieures (JAI)</font></h5>
		<h4> 3 - Les traités modificateurs</h4>
		<h5><u> Les traités d'adhésion des nouveaux pays membres</u></h5>
		<h5><u> Le traité de fusion (des exécutifs)</u></h5>
		<h5><u> L'Acte unique européen</u></h5>
		<h5><u> Le traité d'Amsterdam</u></h5>
		<h5><u> Le traité de Nice</u></h5>
		<h3> II - <a href ="../parties/partie06.php">Les limites dans l'utilisation de ces instruments</a></h3>
		<h4><u> A - Le principe des pouvoirs limités</u></h4>
		<h4><u> B - Le principe de subsidiarité</u></h4>
		<h4><u> C - Le principe de proportionnalité</u></h4>
		<h4><u>  Conclusion </u></h4><br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>					
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement03.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> Quelle est l'étendue des compétences de la Communauté européenne ?</b></p>
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement03.php">
			<textarea id="question_expert" name="question_expert" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>

		<!--<br><br>--><br><h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Extrait</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence internationale</p>
		<h4> Sites Internet (tous les arrêts sont disponibles en français sur Eur-Lex)</h4>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>				
		<form method="post" action="traitement03.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	Quelles sont les taxes qui ne sont pas couvertes par les articles 23 § 1 et 25 du TCE ?</b><br>
		a)	toutes les taxes à l’importation<br>
		b)	toutes les taxes à l’exportation<br>
		c)	toutes les impositions ayant le même effet qu’une taxe à l’importation et/ou à l’exportation<br>
		<mark>d)</mark>	toutes les taxes sur les marchandises<br><br>
		<b>
		2.	Quel est l’évènement qui déclenche l’application de la taxe ?</b><br>
		a)	la fabrication d’un pigment de la classe des dzêta-galadehydes<br>
		<mark>b)</mark>	l’importation d’un pigment de la classe des dzêta-galadehydes<br>
		c)	l’utilisation d’un pigment de la classe des dzêta-galadehydes dans un processus de production<br>
		d)	la vente d’un pigment de la classe des dzêta-galadehydes<br><br>
		<b>
		3.	A la lumière de la jurisprudence des arrêts Van Gend & Loos et Jacques Vabre, les interdictions posées aux articles 23 § 1 et 25 sont-elles directement applicables en droit français ?</b><br>
		a)	non, car toutes règle de droit présente dans un traité international doit être transposée en droit national avant d’avoir un effet<br>
		b)	non, car seuls les Etats membres sont liés par les conventions qui ont été signées, par leurs citoyens<br>
		c)	oui, car les textes de droit européen sont systématiquement prépondérants sur le droit national<br>
		<mark>d)</mark>	oui, car dans les domaines de compétence de l’UE les Etats membres ont renoncé à une partie de leur souveraineté<br><br>
		<b>
		4.	Si cette taxe était appliquée, quel serait son principal effet ?</b><br>
		a)	elle limiterait de façon générale l’utilisation des pigments dans l’industrie<br>
		b)	elle augmenterait la compétitivité du secteur des pigments<br>
		<mark>c)</mark>	elle limiterait l’accès des pigments belges au marché français<br>
		d)	elle faciliterait la libre circulation des marchandises
		</p><br>
		<h4> Réponse au cas pratique / QCM :</h4>
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement03.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>Quel est l'apport du projet de Constitution de l'Union européenne à l'ordre juridique communautaire ?</b></p>
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement03.php">
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