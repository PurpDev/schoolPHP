<h2> Gestion des RDV</h2>

<?php
	
	$unControleur->setTable("famille"); 
	$lesFamilles = $unControleur->selectAll (); 
	
	$unControleur->setTable("rdv"); 
	$leRDV = null; 

	if (isset($_GET['action']) and isset($_GET['idrdv']))
	{
		$action = $_GET['action']; 
		$idrdv = $_GET['idrdv'];

		switch ($action)
		{
			case "del" : 
				$where = array("idrdv"=>$idrdv); 
				$unControleur->delete ($where); 
			break;
			
			case "edit" : 
				$where = array("idrdv"=>$idrdv); 
				$leRDV = $unControleur->selectWhere($where); 

			break; 
		} 
	}


	require_once ("vue/vue_insert_rdv.php");
	if(isset($_POST['Modifier']))
	{
		$unControleur->setTable("rdv");
		$tab = array("adresse"=>$_POST['adresse'], 
					 "daterdv"=>$_POST['daterdv'], 
                     "horaire"=>$_POST['horaire'],
					 "idfamille"=>$_POST['idfamille'] 
					);
		$where = array("idrdv"=>$_GET['idrdv']);
		$unControleur->update($tab, $where); 
		//header("Location: index.php?page=4"); 
	}

	if(isset($_POST['Valider']))
	{
		$unControleur->setTable("rdv");
		$tab = array("adresse"=>$_POST['adresse'], 
                    "daterdv"=>$_POST['daterdv'], 
                    "horaire"=>$_POST['horaire'],
					 "idfamille"=>$_POST['idfamille'] 
					);
		$unControleur->insert($tab); 
	}

	$unControleur->setTable("rdv"); 
	if (isset($_POST['Rechercher']))
	{
		$tab = array("adresse", "daterdv", "horaire","famille"); 
		$mot = $_POST['mot']; 
		$lesRdvs = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesRdvs = $unControleur->selectAll();
	}
	require_once("vue/vue_rdv.php"); 
?>