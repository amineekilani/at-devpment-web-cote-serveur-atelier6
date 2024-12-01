<!DOCTYPE html>
<html>
    <head>
        <title>Liste des villas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Public/bootstrap.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Liste des villas</h2>
            <table>
                <tr>
                    <th>Référence</th>
                    <th>Propriétaire</th>
                    <th>Localité</th>
                    <th>Surface</th>
                    <th>Nombre de pièces</th>
                    <th>Domaine d'usage</th>
                    <th>Nombre d'étages</th>
                    <th colspan=2>Actions</th>
                </tr>
                <?php
                    foreach($villas as $villa)
                    {
                ?>
                <tr>
                    <td><?= $villa["reference"]; ?></td>
                    <td><?= $villa["proprietaire"]; ?></td>
                    <td><?= $villa["localite"]; ?></td>
                    <td><?= $villa["surface"]; ?></td>
                    <td><?= $villa["nbPieces"]; ?></td>
                    <td><?= $villa["domaineUsage"]; ?></td>
                    <td><?= $villa["nbEtages"]; ?></td>
                    <td><a class="btn btn-primary" href="ModifierVilla.php?reference=<?= $villa["reference"]; ?>">Modifier</a></td>
                    <td><a class="btn btn-danger" href="SupprimerVilla.php?reference=<?= $villa["reference"]; ?>">Supprimer</a></td>
                <?php } ?>
            </table>
        </div>
    </body>
</html>