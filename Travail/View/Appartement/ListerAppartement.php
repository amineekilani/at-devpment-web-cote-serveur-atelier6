<!DOCTYPE html>
<html>
    <head>
        <title>Liste des appartements</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Public/bootstrap.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Liste des appartements</h2>
            <table>
                <tr>
                    <th>Référence</th>
                    <th>Propriétaire</th>
                    <th>Localité</th>
                    <th>Surface</th>
                    <th>Nombre de pièces</th>
                    <th>Domaine d'usage</th>
                    <th>Surface de l'espace commun</th>
                    <th colspan=2>Actions</th>
                </tr>
                <?php
                    foreach($appartements as $appartement)
                    {
                ?>
                <tr>
                    <td><?= $appartement["reference"]; ?></td>
                    <td><?= $appartement["proprietaire"]; ?></td>
                    <td><?= $appartement["localite"]; ?></td>
                    <td><?= $appartement["surface"]; ?></td>
                    <td><?= $appartement["nbPieces"]; ?></td>
                    <td><?= $appartement["domaineUsage"]; ?></td>
                    <td><?= $appartement["surfaceEspaceCommun"]; ?></td>
                    <td><a class="btn btn-primary" href="ModifierAppartement.php?reference=<?= $appartement["reference"]; ?>">Modifier</a></td>
                    <td><a class="btn btn-danger" href="SupprimerAppartement.php?reference=<?= $appartement["reference"]; ?>">Supprimer</a></td>
                <?php } ?>
            </table>
        </div>
    </body>
</html>