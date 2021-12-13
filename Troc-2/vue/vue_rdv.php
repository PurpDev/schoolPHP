<h2> Liste des RDV </h2>

<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>

<table border="1">
		<tr>
			<td>Id RDV </td> <td> Adresse </td> <td>Date </td>
			<td> Horaire </td>  <td> Famille</td>
			<?php
			if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
			echo "<td> Opérations </td>"; 
			}
			?>
		</tr>

		<?php
			foreach ($lesRdvs as $unRDV) {
				echo "<tr>";

				echo "  <td> ".$unRDV['idrdv']."</td>
						<td> ".$unRDV['adresse']."</td>
                        <td> ".$unRDV['daterdv']."</td>
                        <td> ".$unRDV['horaire']."</td>
						<td> ".$unRDV['idfamille']."</td>"
					; 

				if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
					echo "
					<td> <a href='index.php?page=4&action=del&idrdv=".$unRDV['idrdv']."'><img src='images/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=4&action=edit&idrdv=".$unRDV['idrdv']."'><img src='images/edit.png' heigth='30' width='30'></a>
				</td>

					";
				}

				echo "</tr>";
			}
		?>

</table>






