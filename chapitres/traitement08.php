<?php
	include_once('includes/connexion.php');

	if(isset($_POST["topo"])) { 
		$topo = htmlspecialchars($_POST["topo"], ENT_QUOTES); 
		$requete_topo = "UPDATE chapitre_08 SET topo_theorique = '$topo' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_topo);
	}

	if(isset($_POST["synthese"])) { 
		$synthese = htmlspecialchars($_POST["synthese"], ENT_QUOTES); 
		$requete_synthese = "UPDATE chapitre_08 SET synthese = '$synthese' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_synthese);
	}

	if(isset($_POST["question_expert"])) { 
		$question_expert = htmlspecialchars($_POST["question_expert"], ENT_QUOTES); 
		$requete_question_expert = "UPDATE chapitre_08 SET avis_expert_rep_q1 = '$question_expert' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_question_expert);
	}

	if(isset($_POST["cas_pratique"])) { 
		$cas_pratique = htmlspecialchars($_POST["cas_pratique"], ENT_QUOTES); 
		$requete_cas_pratique = "UPDATE chapitre_08 SET donnees_cas = '$cas_pratique' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_cas_pratique);
	}

	if(isset($_POST["reponse_cas_pratique"])) { 
		$reponse_cas_pratique = htmlspecialchars($_POST["reponse_cas_pratique"], ENT_QUOTES); 
		$requete_reponse_cas_pratique = "UPDATE chapitre_08 SET reponse_cas_QCM = '$reponse_cas_pratique' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_reponse_cas_pratique);
	}

	if(isset($_POST["axes_reflexions"])) { 
		$axes_reflexions = htmlspecialchars($_POST["axes_reflexions"], ENT_QUOTES); 
		$requete_axes_reflexions = "UPDATE chapitre_08 SET axes_reflex_rep_q1 = '$axes_reflexions' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_axes_reflexions);
	}


	if (!$result) {
		echo "<br>Une erreur s'est produite.<br>";
		exit;
	} else {
		header("Location:chapitre08.php");
	}
