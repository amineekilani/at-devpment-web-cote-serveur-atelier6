<!DOCTYPE html>
<html>
    <head>
        <title>Modifier un appartement</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Public/bootstrap.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body>
        <div class="container mt-3">
            <form action="../../Controller/Appartement/ModifierAppartement.php" method="post">
                <fieldset>
                    <legend>Modification des données d'un Appartement</legend>
                    <div class="mb-3">
                        Référence : <input type="text" name="reference">
                    </div>
                    <div class="mb-3">
                        Propriétaire : <input type="text" name="proprietaire">
                    </div>
                    <div class="mb-3">
                        Localité : <input type="text" name="localite">
                    </div>
                    <div class="mb-3">
                        Surface : <input type="text" name="surface">
                    </div>
                    <div class="mb-3">
                        Domaine d'usage :
                        <select name="domaineUsage">
                            <option>Bureau</option>
                            <option>Domicile</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        Nombre de pièces : <input type="text" name="nbPieces">
                    </div>
                    <div class="mb-3">
                        Surface de l'espace commun : <input type="text" name="surfaceEspaceCommun">
                    </div>
                    <input type="submit" name="ok" value="Modifier">
                </fieldset>
            </form>
        </div>
    </body>
</html>