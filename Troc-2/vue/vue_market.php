<h2> Marché </h2>
<center>
    <table border="1">
        <tr>
            <td>ID jeu</td>
            <td>Nom du jeu</td>
            <td>Côte du jouet</td>
            <td> Propriétaire</td>
           
        </tr>

        <?php
            foreach ($lesSalles as $unMarche) {
                echo "<tr>";
                echo "  <td>".$unMarche['idjouet']."</td>
                        <td>".$unMarche['nom']."</td>
                        <td>".$unMarche['cote']."</td>
                        <td>".$unMarche['enfant']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</center>