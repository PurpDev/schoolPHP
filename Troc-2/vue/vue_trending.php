<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

<h2>Liste des Parents</h2>
<center>


    <table border="1">
        <tr>
            <td>ID Parent</td>
            <td>Prenom</td>
            <td>Nom</td>
            <td>Email</td>
            
        </tr>

        <?php
            foreach ($lesParents as $unParent) {
                echo "<tr>";
                echo "  <td>".$unParent['idparent']."</td>
                        <td>".$unParent['prenom']."</td>
                        <td>".$unParent['nom']."</td>
                        <td>".$unParent['email']."</td>
                        ";
                echo "</tr>";
            }
        ?>
    </table>

</center>

   

    
</body> 
</html>