<?php
        $unControleur->setTable("salle");
        $nbPromotions = $unControleur->count();

        $unControleur->setTable("enfant");
        $nbEtudiants = $unControleur->count();

        $unControleur->setTable("parent");
        $nbProfesseurs = $unControleur->count();

        $unControleur->setTable("jouet");
        $nbEnseignements = $unControleur->count();
?>

<table border="1">
<tr>
    <td>NB marché </td>
    <td>NB enfant </td>
    <td>NB parent </td>
    <td>NB jouet </td>
</tr>
<tr>
    <td> <?= $nbPromotions['nb'] ?></td>
    <td> <?= $nbEtudiants['nb'] ?></td>
    <td> <?= $nbProfesseurs['nb'] ?></td>
    <td> <?= $nbEnseignements['nb'] ?></td>
</tr>
</table>