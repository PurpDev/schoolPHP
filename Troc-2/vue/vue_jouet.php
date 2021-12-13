<h2> Liste des Jouets </h2>

<table border="1">
		<tr>
			<td>Id Jouets </td> <td> Libelle </td>
			<td> Marque  </td> <td> Prix </td> <td> Tranche Age </td>
			<td> Cote </td> <td> Categorie </td> <td> Famille  </td> <td> Acheteur </td>
		</tr>

		<?php
			foreach ($lesJouets as $unJouet) {
				echo "<tr>";

				echo "  <td> ".$unJouet['idjouet']."</td>
						<td> ".$unJouet['libelle']."</td>
						<td> ".$unJouet['marque']."</td>
						<td> ".$unJouet['prix']."</td>
						<td> ".$unJouet['trancheage']."</td>
						<td> ".$unJouet['cote']."</td>
                        <td> ".$unJouet['categorie']."</td>
						<td> ".$unJouet['idfamille']."</td>
                        <td> ".$unJouet['idacheteur']."</td>

						 ";
				echo "
				<td> <a href='index.php?page=6&action=del&idjouet=".$unJouet['idjouet']."'><img src='images/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=6&action=edit&idjouet=".$unJouet['idjouet']."'><img src='images/edit.png' heigth='30' width='30'></a>
				</td>

					";
				echo "</tr>";
			}
		?>

</table>