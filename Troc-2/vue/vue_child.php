<h2>Liste des Enfants</h2>

<center>


    <table border="1">
        <tr>
            <td> Id  </td> <td>Nom Etudiant</td>
            <td>Prenom </td> 
            <td>Âge</td><td>Parent</td>
        </tr>


        <?php
    
        foreach ( $lesEnfants as $unEnfant) {
            echo "<tr>";
            echo " 
                    <td>".$unEnfant['idenfant']."</td>
                    <td>".$unEnfant['nom']."</td>
                    <td>".$unEnfant['prenom']."</td>
                    <td>".$unEnfant['age']."</td>
                    <td>".$unEnfant['parent']."</td>";

                    
            
            
            
            
            echo "</tr>";
        }
    

        // foreach ($lesParents as $unParent) {
        //     echo "<tr>";
        //     echo "  <td>".$unParent['idparent']."</td>
        //             <td>".$unParent['prenom']."</td>
        //             <td>".$unParent['nom']."</td>
        //             <td>".$unParent['email']."</td>
        //             ";
        //     echo "</tr>";
        // }

        ?>

    </table>
</center>