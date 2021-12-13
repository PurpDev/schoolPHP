<h2> Liste des Famille </h2>

<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

<table border="1">
		<tr>
			<td>Id famille </td> <td>Nom famille</td> <td>Prenom Enfant</td>
			<td> NB Membre </td> <td> Adresse </td>  <td> Email Parent </td>
			<?php
			if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
			echo "<td> Opérations </td>"; 
			}
			?>
		</tr>

		<?php
			foreach ($lesFamilles as $uneFamille) {
				echo "<tr>";

				echo "  <td> ".$uneFamille['idfamille']."</td>
						<td> ".$uneFamille['nom']."</td>
						<td> ".$uneFamille['prenomenfant']."</td>
						<td> ".$uneFamille['membre']."</td>
						<td> ".$uneFamille['adresse']."</td>
						<td> ".$uneFamille['email']."</td>"
				; 

				if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
				
					echo "
					<td> <a href='index.php?page=2&action=del&idfamille=".$uneFamille['idfamille']."'><img src='images/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=2&action=edit&idfamille=".$uneFamille['idfamille']."'><img src='images/edit.png' heigth='30' width='30'></a>
					</td>

					";
				}

				echo "</tr>";
			}
		?>

</table>






