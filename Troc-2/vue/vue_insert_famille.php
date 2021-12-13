<h2> Insertion d'une famille</h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> Nom de la famille </td> 
			<td> <input type="text" name="nom" value ="<?php if($laFamille!=null) echo $laFamille['nom'];?>" ></td>
		</tr>
		<tr>
			<td> Prenom Enfant </td> 
			<td> <input type="text" name="prenomenfant"
				value ="<?php if($laFamille!=null) echo $laFamille['prenomenfant'];?>" ></td>
		</tr>
		<tr>
			<td> Membre </td> 
			<td> <input type="text" name="membre" 
				value ="<?php if($laFamille!=null) echo $laFamille['membre'];?>" ></td>
		</tr>

        <tr>
			<td> Adresse </td> 
			<td> <input type="text" name="adresse" 
				value ="<?php if($laFamille!=null) echo $laFamille['adresse'];?>" ></td>
		</tr>

        <tr>
			<td> Email </td> 
			<td> <input type="text" name="email" 
				value ="<?php if($laFamille!=null) echo $laFamille['email'];?>" ></td>
		</tr>

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($laFamille!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>

				></td>
		</tr>
	</table>
</form>















