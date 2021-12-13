<h2> Gestion des jouets </h2>

<?php

	$unControleur->setTable("famille"); 
	$lesFamilles = $unControleur->selectAll();

	$unControleur->setTable("acheteur"); 
	$lesAcheteurs = $unControleur->selectAll(); 

	$unControleur->setTable("jouet"); 
	$leJouet = null; 

	if (isset($_GET['action']) and isset($_GET['idjouet']))
	{
		$action = $_GET['action']; 
		$idjouet = $_GET['idjouet'];

		switch ($action)
		{
			case "del" : 
				$where = array("idjouet"=>$idjouet);
				 
				$unControleur->delete ($where); 
			break;
		
			case "edit" : 
				$where = array("idjouet"=>$idjouet);
				$leJouet = $unControleur->selectWhere($where); 
				 
			break; 
		} 
	}

	require_once("vue/vue_insert_jouet.php");
	if(isset($_POST['Modifier']))
	{
		$unControleur->setTable("jouet");
		$tab = array("libelle"=>$_POST['libelle'], 
					 "marque"=>$_POST['marque'],
					 "prix"=>$_POST['prix'], 
					 "trancheage"=>$_POST['trancheage'],
					 "cote"=>$_POST['cote'], 
					 "categorie"=>$_POST['categorie'], 
					 "idfamille"=>$_POST['idfamille'],
                     "idacheteur"=>$_POST['idacheteur'] 
 
					);
		$where = array("idjouet"=>$_GET['idjouet']);
		$unControleur->update($tab, $where); 
		//header("Location: index.php?page=6"); 
	}

	if(isset($_POST['Valider']))
	{
		$unControleur->setTable("jouet");
		$tab = array("libelle"=>$_POST['libelle'], 
					 "marque"=>$_POST['marque'], 
					 "prix"=>$_POST['prix'], 
					 "trancheage"=>$_POST['trancheage'],
					 "cote"=>$_POST['cote'], 
					 "categorie"=>$_POST['categorie'], 
					 "idfamille"=>$_POST['idfamille'],
                     "idacheteur"=>$_POST['idacheteur'] 
					);
		$unControleur->insert($tab); 
	}

	//$unControleur->setTable("jouet_famille_acheteur"); 

	if (isset($_POST['Rechercher']))
	{
		$tab = array("libelle", "marque","prix", "trancheage", "cote", "categorie", "famille", "acheteur"); //idfamille idacheteur
		$mot = $_POST['mot']; 
		$lesJouets = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesJouets = $unControleur->selectAll();
	}
	 
	require_once("vue/vue_jouet.php"); 
?>
