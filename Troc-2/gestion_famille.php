<h2> Gestion des familles </h2>

<?php
	if(isset($_SESSION['email']) and $_SESSION['role']=="admin") {
		$unControleur->setTable("famille"); 
		$laFamille = null; 

		if(isset($_GET['action']) and isset($_GET['idfamille'])) //action est vue comme val bool = 1
		{
			$action = $_GET['action']; 
			$idfamille = $_GET['idfamille'];

			switch ($action)
			{
				case "del" : 
					$where = array("idfamille"=>$idfamille);//permet d identifier idfamille dans le where l id qu on va delete
					$unControleur->delete($where); 
				break;

				case "edit" : 
					$where = array("idfamille"=>$idfamille); 
					$laFamille = $unControleur->selectWhere($where); 

				break; 
			} 
		}


		require_once("vue/vue_insert_famille.php");

		if(isset($_POST['Modifier']))
		{
			$unControleur->setTable("famille");
			$tab = array("nom"=>$_POST['nom'], 
						 "prenomenfant"=>$_POST['prenomenfant'], 
						 "membre"=>$_POST['membre'],
                         "adresse"=>$_POST['adresse'], 
                         "email"=>$_POST['email']);
			$where = array("idfamille"=>$_GET['idfamille']);
			$unControleur->update($tab, $where); 
			//header("Location: index.php?page=2"); 
		}

		if(isset($_POST['Valider']))
		{
			$unControleur->setTable("famille");
			$tab = array("nom"=>$_POST['nom'], //ici la chaine "nom" prend la val $_POST['nom'] avc syntaxe => de plus comme pn est la pour valider un formulaire avec method post on doit utiliser cette "nom"=>$_POST['nom']  
						 "prenomenfant"=>$_POST['prenomenfant'], 
						 "membre"=>$_POST['membre'],
                         "adresse"=>$_POST['adresse'], 
                         "email"=>$_POST['email']);
			//$where = array("idfamille"=>$_GET['idfamille']);
			$unControleur->insert($tab); 
		}
	}
	
	$unControleur->setTable("famille"); 

	if(isset($_POST['Rechercher']))
	{
		$tab = array("nom", "prenomenfant", "membre", "adresse", "emailparent"); 
		$mot = $_POST['mot']; 
		$lesFamilles = $unControleur->selectSearch($tab, $mot); 
	}

	else
	{
		$lesFamilles = $unControleur->selectAll();
	}
	require_once("vue/vue_famille.php"); 
?>
















