

 <?php 
    $unControleur->setTable("enfants_parents");
    $lesEnfants = $unControleur->SelectAll();

    $unControleur->setTable("parent");
    $lesParents = $unControleur->SelectAll();
	require_once("vue/vue_child.php");
?>