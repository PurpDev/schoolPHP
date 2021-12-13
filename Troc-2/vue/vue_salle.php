<h2> Liste des Salles </h2>

<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

<table border="1">
		<tr>
			<td>Id Salle </td> <td>Nom </td> <td>Categorie </td>
			<?php
			if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
			echo "<td> Opérations </td>"; 
			}
			?>
		</tr>

		<?php
			foreach ($lesSalles as $uneSalle) {
				echo "<tr>";

				echo "  <td> ".$uneSalle['idsalle']."</td>
						<td> ".$uneSalle['nom']."</td>
						<td> ".$uneSalle['categorie']."</td>"; 

				if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
				echo "
				<td> <a href='index.php?page=3&action=del&idsalle=".$uneSalle['idsalle']."'><img src='images/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=3&action=edit&idsalle=".$uneSalle['idsalle']."'><img src='images/edit.png' heigth='30' width='30'></a>
				</td>

					";
				}

				echo "</tr>";
			}
		?>

</table>






