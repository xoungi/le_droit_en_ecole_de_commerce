<?php // parties 13, 14, 15
	include_once('includes/connexion.php');

	if(isset($_POST["partie_1"])) { 
		$partie_1 = htmlspecialchars($_POST["partie_1"], ENT_QUOTES); 
		$requete_partie_1 = "UPDATE chapitre_07 SET partie_1 = '$partie_1' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_partie_1);
	}

	if(isset($_POST["categorie_a"])) { 
		$categorie_a = htmlspecialchars($_POST["categorie_a"], ENT_QUOTES); 
		$requete_categorie_a = "UPDATE chapitre_07 SET categorie_a = '$categorie_a' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_categorie_a);
	}

	if(isset($_POST["categorie_b"])) { 
		$categorie_b = htmlspecialchars($_POST["categorie_b"], ENT_QUOTES); 
		$requete_categorie_b = "UPDATE chapitre_07 SET categorie_b = '$categorie_b' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_categorie_b);
	}



	if(isset($_POST["partie_2"])) { 
		$partie_2 = htmlspecialchars($_POST["partie_2"], ENT_QUOTES); 
		$requete_partie_2 = "UPDATE chapitre_07 SET partie_2 = '$partie_2' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_partie_2);
	}

	if(isset($_POST["categorie_c"])) { 
		$categorie_c = htmlspecialchars($_POST["categorie_c"], ENT_QUOTES); 
		$requete_categorie_c = "UPDATE chapitre_07 SET categorie_c = '$categorie_c' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_categorie_c);
	}	

	if(isset($_POST["souscategorie_1"])) { 
		$souscategorie_1 = htmlspecialchars($_POST["souscategorie_1"], ENT_QUOTES); 
		$requete_souscategorie_1 = "UPDATE chapitre_07 SET souscategorie_1 = '$souscategorie_1' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_1);
	}

	if(isset($_POST["branche_a"])) { 
		$branche_a = htmlspecialchars($_POST["branche_a"], ENT_QUOTES); 
		$requete_branche_a = "UPDATE chapitre_07 SET branche_a = '$branche_a' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_a);
	}

	if(isset($_POST["branche_b"])) { 
		$branche_b = htmlspecialchars($_POST["branche_b"], ENT_QUOTES); 
		$requete_branche_b = "UPDATE chapitre_07 SET branche_b = '$branche_b' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_b);
	}

	if(isset($_POST["souscategorie_2"])) { 
		$souscategorie_2 = htmlspecialchars($_POST["souscategorie_2"], ENT_QUOTES); 
		$requete_souscategorie_2 = "UPDATE chapitre_07 SET souscategorie_2 = '$souscategorie_2' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_2);
	}

	if(isset($_POST["branche_c"])) { 
		$branche_c = htmlspecialchars($_POST["branche_c"], ENT_QUOTES); 
		$requete_branche_c = "UPDATE chapitre_07 SET branche_c = '$branche_c' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_c);
	}

	if(isset($_POST["branche_d"])) { 
		$branche_d = htmlspecialchars($_POST["branche_d"], ENT_QUOTES); 
		$requete_branche_d = "UPDATE chapitre_07 SET branche_d = '$branche_d' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_d);
	}

	if(isset($_POST["categorie_d"])) { 
		$categorie_d = htmlspecialchars($_POST["categorie_d"], ENT_QUOTES); 
		$requete_categorie_d = "UPDATE chapitre_07 SET categorie_d = '$categorie_d' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_categorie_d);
	}	

	if(isset($_POST["souscategorie_3"])) { 
		$souscategorie_3 = htmlspecialchars($_POST["souscategorie_3"], ENT_QUOTES); 
		$requete_souscategorie_3 = "UPDATE chapitre_07 SET souscategorie_3 = '$souscategorie_3' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_3);
	}

	if(isset($_POST["branche_e"])) { 
		$branche_e = htmlspecialchars($_POST["branche_e"], ENT_QUOTES); 
		$requete_branche_e = "UPDATE chapitre_07 SET branche_e = '$branche_e' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_e);
	}

	if(isset($_POST["branche_f"])) { 
		$branche_f = htmlspecialchars($_POST["branche_f"], ENT_QUOTES); 
		$requete_branche_f = "UPDATE chapitre_07 SET branche_f = '$branche_f' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_f);
	}

	if(isset($_POST["souscategorie_4"])) { 
		$souscategorie_4 = htmlspecialchars($_POST["souscategorie_4"], ENT_QUOTES); 
		$requete_souscategorie_4 = "UPDATE chapitre_07 SET souscategorie_4 = '$souscategorie_4' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_4);
	}

	if(isset($_POST["branche_g"])) { 
		$branche_g = htmlspecialchars($_POST["branche_g"], ENT_QUOTES); 
		$requete_branche_g = "UPDATE chapitre_07 SET branche_g = '$branche_g' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_g);
	}

	if(isset($_POST["branche_h"])) { 
		$branche_h = htmlspecialchars($_POST["branche_h"], ENT_QUOTES); 
		$requete_branche_h = "UPDATE chapitre_07 SET branche_h = '$branche_h' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_h);
	}


	if(isset($_POST["partie_3"])) { 
		$partie_3 = htmlspecialchars($_POST["partie_3"], ENT_QUOTES); 
		$requete_partie_3 = "UPDATE chapitre_07 SET partie_3 = '$partie_3' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_partie_3);
	}

	if(isset($_POST["categorie_e"])) { 
		$categorie_e = htmlspecialchars($_POST["categorie_e"], ENT_QUOTES); 
		$requete_categorie_e = "UPDATE chapitre_07 SET categorie_e = '$categorie_e' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_categorie_e);
	}	

	if(isset($_POST["souscategorie_5"])) { 
		$souscategorie_5 = htmlspecialchars($_POST["souscategorie_5"], ENT_QUOTES); 
		$requete_souscategorie_5 = "UPDATE chapitre_07 SET souscategorie_5 = '$souscategorie_5' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_5);
	}	

	if(isset($_POST["souscategorie_6"])) { 
		$souscategorie_6 = htmlspecialchars($_POST["souscategorie_6"], ENT_QUOTES); 
		$requete_souscategorie_6 = "UPDATE chapitre_07 SET souscategorie_6 = '$souscategorie_6' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_6);
	}

	if(isset($_POST["categorie_f"])) { 
		$categorie_f = htmlspecialchars($_POST["categorie_f"], ENT_QUOTES); 
		$requete_categorie_f = "UPDATE chapitre_07 SET categorie_f = '$categorie_f' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_categorie_f);
	}

	if(isset($_POST["souscategorie_7"])) { 
		$souscategorie_7 = htmlspecialchars($_POST["souscategorie_7"], ENT_QUOTES); 
		$requete_souscategorie_7 = "UPDATE chapitre_07 SET souscategorie_7 = '$souscategorie_7' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_7);
	}	

	if(isset($_POST["souscategorie_8"])) { 
		$souscategorie_8 = htmlspecialchars($_POST["souscategorie_8"], ENT_QUOTES); 
		$requete_souscategorie_8 = "UPDATE chapitre_07 SET souscategorie_8 = '$souscategorie_8' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_souscategorie_8);
	}

	if(isset($_POST["branche_i"])) { 
		$branche_i = htmlspecialchars($_POST["branche_i"], ENT_QUOTES); 
		$requete_branche_i = "UPDATE chapitre_07 SET branche_i = '$branche_i' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_i);
	}

	if(isset($_POST["branche_j"])) { 
		$branche_j = htmlspecialchars($_POST["branche_j"], ENT_QUOTES); 
		$requete_branche_j = "UPDATE chapitre_07 SET branche_j = '$branche_j' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_j);
	}

	if(isset($_POST["branche_k"])) { 
		$branche_k = htmlspecialchars($_POST["branche_k"], ENT_QUOTES); 
		$requete_branche_k = "UPDATE chapitre_07 SET branche_k = '$branche_k' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_branche_k);
	}

	if(isset($_POST["conclusion"])) { 
		$conclusion = htmlspecialchars($_POST["conclusion"], ENT_QUOTES); 
		$requete_conclusion = "UPDATE chapitre_07 SET conclusion = '$conclusion' WHERE id_cha7 = 7";
		$result = pg_query($dbconn, $requete_conclusion);
	}


	if (!$result) {
		echo "<br>Une erreur s'est produite.<br>";
		exit;
	} else {
		header("Location:../chapitres/chapitre07.php");
	}