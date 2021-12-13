<h2> Insertion d'une salle </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> Nom Salle </td> 
			<td> <input type="text" name="nom" value ="<?php if($laSalle!=null) echo $laSalle['nom'];?>" ></td>
		</tr>
		<tr>
			<td> Categorie </td> 
			<td> <input type="text" name="categorie"
				value ="<?php if($laSalle!=null) echo $laSalle['categorie'];?>" ></td>
		</tr>


		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($laSalle!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>

				></td>
		</tr>
	</table>
</form>















