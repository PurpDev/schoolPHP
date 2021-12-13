<h2> Insertion d'un RDV </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> Adresse rdv </td> 
			<td> <input type="text" name="adresse" value ="<?php if($leRDV!=null) echo $leRDV['adresse'];?>"></td>
		</tr>
		<tr>
			<td> Daterdv </td> 
			<td> <input type="text" name="daterdv" value ="<?php if($leRDV!=null) echo $leRDV['daterdv'];?>"></td>
		</tr>
		<tr>
			<td> Horaire </td> 
			<td> <input type="text" name="horaire" value ="<?php if($leRDV!=null) echo $leRDV['horaire'];?>"></td>
		</tr>
		
		<tr>
			<td> La Famille </td> 
			<td> 
					<select name = "idfamille"> 
						<?php
						foreach ($lesFamilles as $uneFamille) {
                            echo "<option value ='".$uneFamille['idfamille']."'>".$uneFamille['nom']."</option>"; 
						}
						?>
					</select>
			</td>
		</tr>


		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leRDV!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?></td>
		</tr>
	</table>
</form>




