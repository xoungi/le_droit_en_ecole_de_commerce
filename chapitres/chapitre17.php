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
			$requete = "SELECT topo_theorique, donnees_cas, reponse_cas_qcm, synthese, avis_expert, avis_expert_rep_q1, axes_reflex_rep_q1, axes_reflex_rep_q2, axes_reflex_rep_q3 FROM chapitre_17";
			$result = pg_query($dbconn, $requete);
			while ($row = pg_fetch_assoc($result)) {
				$topo = $row["topo_theorique"];
				$synthese = $row["synthese"];
				$avis_expert = $row["avis_expert"] ;
				$avis_expert_q1 = $row["avis_expert_rep_q1"] ;
				$cas_pratique = $row["donnees_cas"] ;
				$reponse_cas_pratique = $row["reponse_cas_qcm"] ;
				$axes_reflexions_1 = $row["axes_reflex_rep_q1"] ;
				$axes_reflexions_2 = $row["axes_reflex_rep_q2"] ;
				$axes_reflexions_3 = $row["axes_reflex_rep_q3"] ;
			}
		?>
		<div><h2><a href="../index.html">Home</a></h2></div>
		<hr /><h2> 17 - Le rayonnement contractuel </h2>
		<p>force obligatoire du contrat, effet relatif du contrat, bonne foi, révocation du contrat, tiers au contrat, stipulation pour autrui, promesse pour autrui</p><br>
		
		<h3 id="topo"><a href="#topo">Topo théorique</a></h3>
		<?php
			if ($topo != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($topo, ENT_NOQUOTES))."</p>";
			} else {
		?>
		<form method="post" action="traitement17.php">
			<textarea id="topo" name="topo" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3> I - <a href ="../parties/partie34.php">La force obligatoire des contrats </a></h3>
		<h4><u> A - Principe d’interdiction de la révocation unilatérale</u></h4>
		<h4><u> B - Le cas de la révocation unilatérale exceptionnelle</u></h4>
		<h4> 1 - Révocation prévue par les parties</h4>
		<h4> 2 - Révocation permise par la loi</h4>
		<h5><u> Tout contrat à exécution successive conclu pour une durée indéterminée</u></h5>
		<h5><u> Plusieurs lois destinées à protéger les consommateurs leurs accordent un droit de repentir dans un délai déterminé</u></h5>
		<h5><u> Les clauses abusives sont réputées non écrites</u></h5>
		<br><h3> II - <a href ="../parties/partie35.php">L'effet relatif des contrats</a></h3>
		<h4><u> A - Les différents catégories de tiers</u></h4>
		<h4> 1 - Les tiers absolus</h4>
		<h4> 2 - Les tiers devenus parties</h4>
		<h4> 3 - Les créanciers chirographaires et les ayants cause à titre particulier</h4>
		<h4><u> B - Les effets de contrats à l'égard des tiers</u></h4>
		<h4> 1 - Stipulation pour autrui (article 1121 du C. Civ.)</h4>
		<h4> 2 - Promesse pour autrui</h4>
		<h4><u>  Conclusion </u></h4>
		<br><br>

		<h3 id="synthese"><a href="#synthese">Synthèse</a></h3>	
		<?php
			if ($synthese != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($synthese, ENT_NOQUOTES))."</p>";
			} else {
		?>							
		<form method="post" action="traitement17.php">
			<textarea id="synthese" name="synthese" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="avis"><a href="#avis">Avis expert</a></h3>
		<p><b> L'interprétation du contrat par les juges</b></p>	
		<?php
			if ($avis_expert_q1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($avis_expert_q1, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement17.php">
			<textarea id="question_expert_1" name="question_expert_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>

		<h3 id="Documents"><a href="#Documents">Documents</a></h3>
		<h4> Textes sources</h4>
		<h4> Arrêts </h4>
		<p> - Jurisprudence nationale</p>
		<br><br>

		<h3 id="Cas_Pratique"><a href="#Cas_Pratique">Cas Pratique</a></h3>	
		<?php
			if ($cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement17.php">
			<textarea id="cas_pratique" name="cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<br><h4>QCM d'aide : </h4><p> <b>
		1.	M. Mirail peut-il être considéré comme un tiers au contrat unissant M. Martin à son ancienne entreprise ?</b><br>
		<mark>a)</mark>	Oui<br>
		b)	Non<br><br>
		<b>
		2.	M. Mirail peut-il se voir opposer la clause de non-concurrence unissant son nouvel employé à son ancien employeur ?</b><br>
		a)	En tant que tiers au contrat, M. Mirail n’est pas concerné par cette clause de non-concurrence<br>
		<mark>b)</mark>	Même en tant que tiers, une telle clause lui est opposable<br><br>
		<b>
		3.	Un contrat de travail est-il soumis à une exécution de bonne fois et de loyauté comme dans tout autre contrat ?</b><br>
		<mark>a)</mark>	Oui<br>
		b)	Non<br><br>
		<b>
		4.	M. Mirail peut-il se fonder sur cette obligation d’exécuter le contrat de bonne fois, pour justifier un licenciement à l’encontre d’un employé qui refuse tout contact avec l’entreprise pendant la durée de son arrêt maladie ?</b><br>
		a)	Oui, le refus de l’employé de communiquer constitue une faute justifiant un licenciement et va à l’encontre de l’obligation d’exécuter le contrat de bonne foi<br>
		<mark>b)</mark>	Non, l’employé est dispensé, pendant la durée de son arrêt maladie, de fournir une quelconque prestation de travail à l’égard de son employeur
		</p><br>
		<h4> Réponse au cas pratique / QCM :</h4>	
		<?php
			if ($reponse_cas_pratique != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($reponse_cas_pratique, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement17.php">
			<textarea id="reponse_cas_pratique" name="reponse_cas_pratique" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<!--<br><br>--><br>
		
		<h3 id="axes"><a href="#axes">Axes de réflexions</a></h3>
		<p> <b>La révision du contrat</b></p>						
		<?php
			if ($axes_reflexions_1 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_1, ENT_NOQUOTES))."</p>";
			} else {
		?>	
		<form method="post" action="traitement17.php">
			<textarea id="axes_reflexions_1" name="axes_reflexions_1" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Révision prévue par une clause du contrat</b></p>	
		<?php
			if ($axes_reflexions_2 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_2, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement17.php">
			<textarea id="axes_reflexions_2" name="axes_reflexions_2" rows="5" cols="30"></textarea>
			<br>
			<input type="submit" value="Envoyer" />
		</form>
		<?php } ?>
		<p> <b>Révision permise par la loi</b></p>	
		<?php
			if ($axes_reflexions_3 != "") {
				echo "<p>".nl2br(htmlspecialchars_decode($axes_reflexions_3, ENT_NOQUOTES))."</p>";
			} else {
		?>						
		<form method="post" action="traitement17.php">
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