<h2> Liste des Acheteur </h2>

<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

<table border="1">
		<tr>
			<td>Id famille </td> <td>Nom </td> <td>Prenom </td>
			<td> Adresse </td>  <td> Email</td>
			<?php
			if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
			echo "<td> Opérations </td>"; 
			}
			?>
		</tr>

		<?php
			foreach ($lesAcheteurs as $unAcheteur) {
				echo "<tr>";

				echo "  <td> ".$unAcheteur['idacheteur']."</td>
						<td> ".$unAcheteur['nom']."</td>
                        <td> ".$unAcheteur['prenom']."</td>
                        <td> ".$unAcheteur['adresse']."</td>
						<td> ".$unAcheteur['email']."</td>"; 

				if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
				echo "
				<td> <a href='index.php?page=5&action=del&idacheteur=".$unAcheteur['idacheteur']."'><img src='images/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=5&action=edit&idacheteur=".$unAcheteur['idacheteur']."'><img src='images/edit.png' heigth='30' width='30'></a>
				</td>

					";
				}

				echo "</tr>";
			}
		?>

</table>






