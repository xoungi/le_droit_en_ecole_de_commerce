<?php // parties 16, 17
	include_once('includes/connexion.php');

	if(isset($_POST["partie_1"])) { 
		$partie_1 = htmlspecialchars($_POST["partie_1"], ENT_QUOTES); 
		$requete_partie_1 = "UPDATE chapitre_08 SET partie_1 = '$partie_1' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_partie_1);
	}

	if(isset($_POST["categorie_a"])) { 
		$categorie_a = htmlspecialchars($_POST["categorie_a"], ENT_QUOTES); 
		$requete_categorie_a = "UPDATE chapitre_08 SET categorie_a = '$categorie_a' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_categorie_a);
	}

	if(isset($_POST["categorie_b"])) { 
		$categorie_b = htmlspecialchars($_POST["categorie_b"], ENT_QUOTES); 
		$requete_categorie_b = "UPDATE chapitre_08 SET categorie_b = '$categorie_b' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_categorie_b);
	}

	if(isset($_POST["categorie_c"])) { 
		$categorie_c = htmlspecialchars($_POST["categorie_c"], ENT_QUOTES); 
		$requete_categorie_c = "UPDATE chapitre_08 SET categorie_c = '$categorie_c' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_categorie_c);
	}	

	if(isset($_POST["partie_2"])) { 
		$partie_2 = htmlspecialchars($_POST["partie_2"], ENT_QUOTES); 
		$requete_partie_2 = "UPDATE chapitre_08 SET partie_2 = '$partie_2' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_partie_2);
	}

	if(isset($_POST["categorie_d"])) { 
		$categorie_d = htmlspecialchars($_POST["categorie_d"], ENT_QUOTES); 
		$requete_categorie_d = "UPDATE chapitre_08 SET categorie_d = '$categorie_d' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_categorie_d);
	}	

	if(isset($_POST["categorie_e"])) { 
		$categorie_e = htmlspecialchars($_POST["categorie_e"], ENT_QUOTES); 
		$requete_categorie_e = "UPDATE chapitre_08 SET categorie_e = '$categorie_e' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_categorie_e);
	}	

	if(isset($_POST["conclusion"])) { 
		$conclusion = htmlspecialchars($_POST["conclusion"], ENT_QUOTES); 
		$requete_conclusion = "UPDATE chapitre_08 SET conclusion = '$conclusion' WHERE id_cha8 = 8";
		$result = pg_query($dbconn, $requete_conclusion);
	}


	if (!$result) {
		echo "<br>Une erreur s'est produite.<br>";
		exit;
	} else {
		header("Location:../chapitres/chapitre08.php");
	}