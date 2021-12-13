<h2> Insertion d'un jouet</h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> libelle </td> 
			<td> <input type="text" name="libelle" value ="<?php if($leJouet!=null) echo $leJouet['libelle'];?>"></td>
		</tr>
		<tr>
			<td> Marque </td> 
			<td> <input type="text" name="marque" value ="<?php if($leJouet!=null) echo $leJouet['marque'];?>"></td>
		</tr>
		<tr>
			<td> Prix </td> 
			<td> <input type="text" name="prix" value ="<?php if($leJouet!=null) echo $leJouet['prix'];?>"></td>
		</tr>

		<tr>
			<td> Tranche Age </td> 
			<td> <input type="text" name="trancheage" value ="<?php if($leJouet!=null) echo $leJouet['trancheage'];?>"></td>
		</tr>

        <tr>
			<td> Cote </td> 
			<td> <input type="text" name="cote" value ="<?php if($leJouet!=null) echo $leJouet['cote'];?>"></td>
		</tr>

        <tr>
			<td> Categorie </td> 
			<td> <input type="text" name="categorie" value ="<?php if($leJouet!=null) echo $leJouet['categorie'];?>"></td>
		</tr>

	
		<tr>
			<td> La Famille </td> 
			<td> 
				<select name = "idfamille"> 
					<?php
						foreach($lesFamilles as $uneFamille) {
							echo "<option value ='".$uneFamille['idfamille']."'>".$uneFamille['nom']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td> L Acheteur </td> 
			<td> 
				<select name = "idacheteur"> 
					<?php
						foreach($lesAcheteurs as $unAcheteur) {
							echo "<option value ='".$unAcheteur['idacheteur']."'>".$unAcheteur['nom']."  ".$unAcheteur['prenom']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leJouet!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?></td>
		</tr>
	</table>
</form>




