<h2> Insertion d'un acheteur ou acheteuse </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> Nom Acheteur </td> 
			<td> <input type="text" name="nom" value ="<?php if($leAcheteur!=null) echo $leAcheteur['nom'];?>" ></td>
		</tr>
		<tr>
			<td> Prenom Acheteur </td> 
			<td> <input type="text" name="prenom"
				value ="<?php if($leAcheteur!=null) echo $leAcheteur['prenom'];?>" ></td>
		</tr>
	

        <tr>
			<td> Adresse </td> 
			<td> <input type="text" name="adresse" 
				value ="<?php if($leAcheteur!=null) echo $leAcheteur['adresse'];?>" ></td>
		</tr>

        <tr>
			<td> Email </td> 
			<td> <input type="text" name="email" 
				value ="<?php if($leAcheteur!=null) echo $leAcheteur['email'];?>" ></td>
		</tr>

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leAcheteur!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>

				></td>
		</tr>
	</table>
</form>















