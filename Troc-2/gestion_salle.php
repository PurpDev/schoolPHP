<h2> Gestion des salles </h2>

<?php
	if (isset($_SESSION['email']) and $_SESSION['role']=="admin") {
		$unControleur->setTable("salle"); 
		$laSalle = null; 

		if (isset($_GET['action']) and isset($_GET['idsalle']))
		{
			$action = $_GET['action']; 
			$idsalle = $_GET['idsalle'];

			switch ($action)
			{
				case "del": 
					$where = array("idsalle"=>$idsalle); 
					$unControleur->delete($where); 
				break;
				
				case "edit": 
					$where = array("idsalle"=>$idsalle); 
					$laSalle = $unControleur->selectWhere($where); 

				break; 
			} 
		}


		require_once ("vue/vue_insert_salle.php");
		if(isset($_POST['Modifier']))
		{
			$unControleur->setTable("salle");
			$tab = array("nom"=>$_POST['nom'], 
                         "categorie"=>$_POST['categorie']);
			$where = array("idsalle"=>$_GET['idsalle']);
			$unControleur->update($tab, $where); 
			//header("Location: index.php?page=3"); 
		}

		if(isset($_POST['Valider']))
		{
			$unControleur->setTable("salle");
			$tab = array("nom"=>$_POST['nom'], 
                         "categorie"=>$_POST['categorie']);
			//$where = array("idsalle"=>$_GET['idsalle']);
			$unControleur->insert($tab); 
		}
	}
	
	$unControleur->setTable("salle"); 
	if (isset($_POST['Rechercher']))
	{
		$tab = array("nom", "categorie"); 
		$mot = $_POST['mot']; 
		$lesSalles = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesSalles = $unControleur->selectAll();
	}
	require_once ("vue/vue_salle.php"); 
?>
















